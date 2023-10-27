const Base = {
    loadBar: null,

    fixedScroll: () =>
    {
        const elements = document.getElementsByClassName( 'set-browser-height' );
        if ( elements ) 
        {
            for ( const item of elements )
            {
                console.log( window.innerHeight );
                item.style.height = `${window.innerHeight - 150}px`;
            }
        }
    },

    ajax: ( url, method, data, successCallback, errorCallback, showLoad = true ) =>
    {
        let xhr = new XMLHttpRequest();
        xhr.open( method, url );
        xhr.responseType = 'json';

        // request state change event
        xhr.onreadystatechange = () =>
        {
            if ( showLoad ) 
            {
                Base.loading( .2 );
            }
            console.log( xhr );
            // request completed?
            if ( xhr.readyState !== 4 )
            {
                Base.loading( .5 );
            }
            else
            {
                if ( showLoad ) { Base.loading( 1 ); }
                if ( xhr.status === 200 )
                {
                    
                    // request successful - show response
                    if ( typeof( successCallback ) == 'function' ) 
                    {
                        successCallback( xhr.response );
                    }

                    /* redirect if available */
                    if ( typeof ( xhr.response.redirect == 'string' ) ) 
                    {
                        window.location.href = xhr.response.redirect;
                    }

                }
                else
                {
                    // request error

                    if (
                        typeof ( xhr.response.error )  &&
                        typeof ( xhr.response.messages.error ) == 'string'
                    ) 
                    {
                        Base.notify( xhr.statusText, xhr.response.messages.error, 'danger' );
                    }
                    else
                    {
                        /* generic errors */
                        Base.notify( xhr.statusText, 
                            `${xhr.response.title}<br>${xhr.response.message}`, 
                            'danger' 
                        );
                    }

                    /* load the callback */
                    if ( typeof ( errorCallback ) == 'function' ) 
                    {
                        errorCallback( xhr.response );
                    }
                }
            }
        };

        xhr.onprogress = ( event ) =>
        {
            if ( event.lengthComputable == true && showLoad ) 
            {
                Base.loading( event.loaded / event.total );
            }
        };

        // start request
        xhr.send( data );
    },

    loading: ( percent ) =>
    {
        if ( Base.loadBar == null )
        {
            Base.loadBar = new ProgressBar.Line( '#progress-container', {
                strokeWidth: .5,
                easing: 'easeInOut',
                duration: 1000,
                color: 'var(--bs-primary)',
                trailColor: '#eee',
                trailWidth: 1,
                svgStyle: { width: '100%', height: '100%' }
            } );
        }

        Base.loadBar.animate( percent, ( e ) =>
        {
            if ( percent == 1 )
            {
                Base.loadBar.destroy();
                Base.loadBar = null;
            }
        } );
    },

    notify: ( title, message, type, timeout = 0 ) =>
    {
        const toastElmId = `toast-${Date.now()}`;
        const toastContainer = document.getElementById( 'toast-container' );
        const toastHtml = `
        <div id="${toastElmId}" class="toast border-3 border-${type}" role="alert" 
        aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
            <div class="toast-header text-bg-${type} rounded-0">
                <strong class="me-auto text-capitalize">
                    ${title}
                </strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                ${message}
            </div>
        </div>`;

        if ( toastContainer ) 
        {
            toastContainer.innerHTML = toastContainer.innerHTML + toastHtml;
        }

        const newToast = document.getElementById( toastElmId );

        if ( newToast ) 
        {
            const toastBootstrap = bootstrap.Toast.getOrCreateInstance( newToast );
            toastBootstrap.show();
        }
        return newToast;
    }

};

/* anonymous function */
( () =>
{
    Base.fixedScroll();
} )();
