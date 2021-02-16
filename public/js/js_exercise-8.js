$(document).ready(function(){
    var exerciseStart;
    $('.button-mulai').click(function(){
        $('.exercise-1').animate({
            opacity: 1
        });

        $('.img-preview').animate({
            opacity: 1
        });

        $('.waktu').stopwatch({format:'{MM}:{ss}'}).stopwatch('start');

        exerciseStart = true;
        $('.exercise-1 .total-exercise').replaceWith($('.exercise-1 .total-exercise-active').text());
        
        $(this).animate({
            opacity: 0
        });
    });

    var exerciseClicked1;
    $(".exercise-1").click(function(){
        if (exerciseStart != true ) {
            alert('klik tombol mulai terlebih dahulu!');
            exerciseClicked1 == false;
        }

        else if(exerciseStart == true && exerciseClicked2 != true){
            $(this).animate({
                opacity: 0.5
            });
            exerciseClicked1 = true;
            $('.exercise-2').animate({
                opacity: 1
            });
    
            $('.exercise-2 .total-exercise').replaceWith($('.exercise-2 .total-exercise-active').text());
    
            $('.img-preview').fadeOut(500, function() {
            $('.img-preview').attr("src",$('.img-preview-2').attr("src"));
            $('.img-preview').fadeIn(500);
            });
        }
        
        else{
            $('.exercise-2').animate({
                opacity: 0.5
            });
        }
    });

    var exerciseClicked2;
    $(".exercise-2").click(function(){
        if (exerciseClicked1 == true && exerciseClicked3 != true) {
        exerciseClicked2 = true;
        
        $(this).animate({
            opacity: 0.5
        });
        
        $('.exercise-3').animate({
            opacity: 1
        });

        $('.exercise-3 .total-exercise').replaceWith($('.exercise-3 .total-exercise-active').text());
        
        $('.img-preview').fadeOut(500, function() {
            $('.img-preview').attr("src",$('.img-preview-3').attr("src"));
        $('.img-preview').fadeIn(500);
        });
        }
        else if (exerciseClicked1 != true) {
            alert("selesaikan dulu latihan sebelumnya !");
        }

        else if (exerciseClicked3 == true){
            $('.exercise-3').animate({
                opacity: 0.5
            });
        }
    });

    var exerciseClicked3;
    $(".exercise-3").click(function(){
        if (exerciseClicked2 == true && exerciseClicked4 != true) {
        exerciseClicked3 = true;
        $(this).animate({
            opacity: 0.5
        });
        $('.exercise-4').animate({
            opacity: 1
        });
        
        $('.exercise-4 .total-exercise').replaceWith($('.exercise-4 .total-exercise-active').text());
        
        $('.img-preview').fadeOut(500, function() {
            $('.img-preview').attr("src",$('.img-preview-4').attr("src"));
        $('.img-preview').fadeIn(500);
        });
    }
        else if (exerciseClicked2 != true) {
            alert("selesaikan dulu latihan sebelumnya !");
        }

        else {
            $('.exercise-4').animate({
                opacity: 0.5
            });
        }
    });

    var exerciseClicked4;
    $(".exercise-4").click(function(){
        if (exerciseClicked3 == true && exerciseClicked5 != true) {
        exerciseClicked4 = true;
        $(this).animate({
            opacity: 0.5
        });

        $('.exercise-5').animate({
            opacity: 1
        });

        $('.exercise-5 .total-exercise').replaceWith($('.exercise-5 .total-exercise-active').text());
        
        $('.img-preview').fadeOut(500, function() {
            $('.img-preview').attr("src",$('.img-preview-5').attr("src"));
        $('.img-preview').fadeIn(500);
        });
    }
        else if (exerciseClicked3 != true) {
            alert("selesaikan dulu latihan sebelumnya !");
        }

        else {
            $('.exercise-5').animate({
                opacity: 0.5
            });
        }
    });

    var exerciseClicked5;
    $(".exercise-5").click(function(){
        if (exerciseClicked4 == true && exerciseClicked6 != true) {
        exerciseClicked5 = true;
        $(this).animate({
            opacity: 0.5
        });

        $('.exercise-6').animate({
            opacity: 1
        });

        $('.exercise-6 .total-exercise').replaceWith($('.exercise-6 .total-exercise-active').text());
        
        $('.img-preview').fadeOut(500, function() {
            $('.img-preview').attr("src",$('.img-preview-6').attr("src"));
        $('.img-preview').fadeIn(500);
        });
    }
        else if (exerciseClicked4 != true) {
            alert("selesaikan dulu latihan sebelumnya !");
        }

        else {
            $('.exercise-6').animate({
                opacity: 0.5
            });
        }
    });

    var exerciseClicked6;
    $(".exercise-6").click(function(){
        if (exerciseClicked5 == true && exerciseClicked7 != true) {
        exerciseClicked6 = true;
        $(this).animate({
            opacity: 0.5
        });

        $('.exercise-7').animate({
            opacity: 1
        });

        $('.exercise-7 .total-exercise').replaceWith($('.exercise-7 .total-exercise-active').text());
        
        $('.img-preview').fadeOut(500, function() {
            $('.img-preview').attr("src",$('.img-preview-7').attr("src"));
        $('.img-preview').fadeIn(500);
        });
    }
        else if (exerciseClicked5 != true) {
            alert("selesaikan dulu latihan sebelumnya !");
        }

        else {
            $('.exercise-7').animate({
                opacity: 0.5
            });
        }
    });

    var exerciseClicked7;
    $(".exercise-7").click(function(){
        if (exerciseClicked6 == true && exerciseClicked8 != true) {
        exerciseClicked7 = true;
        $(this).animate({
            opacity: 0.5
        });

        $('.exercise-8').animate({
            opacity: 1
        });

        $('.exercise-8 .total-exercise').replaceWith($('.exercise-8 .total-exercise-active').text());
        
        $('.img-preview').fadeOut(500, function() {
            $('.img-preview').attr("src",$('.img-preview-8').attr("src"));
        $('.img-preview').fadeIn(500);
        });
    }
        else if (exerciseClicked6 != true) {
            alert("selesaikan dulu latihan sebelumnya !");
        }

        else {
            $('.exercise-8').animate({
                opacity: 0.5
            });
        }
    });

    var exerciseClicked8;
    $(".exercise-8").click(function(){
        if (exerciseClicked7 == true) {
            exerciseClicked8 = true;
            $(this).animate({
                opacity: 0.5
            });
            $(".waktu").stopwatch({format:'{MM}:{ss}'}).stopwatch('stop');
            var waktu = $('.waktu').html();
            $('#timer').val(waktu);
            $(".preview").hide();
        }

        else {
            alert("selesaikan dulu latihan sebelumnya!");
    }
    });

    $(".final-day-10").click(function(){
        localStorage.setItem("Hari10-cat1", 1);
    });
    
    $(".final-day-11").click(function(){
        localStorage.setItem("Hari11-cat1", 1);
    });

    $(".final-day-12").click(function(){
        localStorage.setItem("Hari12-cat1", 1);
    });

    $('.button-mulai-lagi').click(function(){
        location.reload();
    })
  });
  