const Base = {
    fixedScroll: () =>
    {
        const elements = document.getElementsByClassName( 'set-browser-height' );
        if ( elements ) 
        {
            for ( const item of elements )
            {
                console.log(window.innerHeight);
                item.style.height = `${window.innerHeight-150}px`;
            }
        }
    }
};

/* anonymous function */
(()=>{
    Base.fixedScroll();
})();
