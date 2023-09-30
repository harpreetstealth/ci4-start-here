const Base = {
    openPopUp: () =>
    {
        let btn = document.getElementById( 'popup-btn' );
        if ( btn ) 
        {

            // old method
            // btn.onclick(function(e){

            // });

            // new style
            btn.onclick = ( e ) =>
            {
                e.preventDefault();
                let modal = new tingle.modal();
                modal.setContent( '<h1>here\'s some content</h1>' );
                modal.open();
            };
        }
    }
};

/* anonymous function */
(()=>{
    Base.openPopUp();
})();
