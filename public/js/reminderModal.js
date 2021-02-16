
            $(window).on('load',function(){
                if (!localStorage.getItem('shown-modal')){
                    $('#reminderModal').modal('show');
                    localStorage.setItem('shown-modal', 'true');
                }
            });
    $(document).ready(function(){
    $('.logout').click(function(){
        localStorage.removeItem('shown-modal');
    });
});