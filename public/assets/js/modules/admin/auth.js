const Auth = {
    login: () =>
    {
        const loginForm = document.getElementById( 'login-form' );
        if ( loginForm ) 
        {
            loginForm.onsubmit = ( e ) =>
            {
                if ( !loginForm.checkValidity() )
                {
                    e.preventDefault();
                    e.stopPropagation();
                }
                else
                {
                    e.preventDefault();
                    Base.ajax(
                        loginForm.getAttribute( 'action' ),
                        loginForm.getAttribute( 'method' ),
                        new FormData( loginForm ),
                        ( response ) =>
                        {
                            console.log( response );
                        }
                    );
                }
                loginForm.classList.add( 'was-validated' );
            };
        }
    }
};

/* anonymous function */
( () =>
{
    Auth.login();
} )();
