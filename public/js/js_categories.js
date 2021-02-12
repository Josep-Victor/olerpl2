$(document).ready(function(){
    $('.hitung').click(function(){

        if ($('.bb').val() == 0 && $('.tb').val() == 0){
            alert('Isi dulu semua data !');
            location.reload();
            $('.notif-ideal').animate({
                opacity: 0
            });
        }

        var beratBadan = parseInt($('.bb').val());
        var tinggiBadan = parseInt($('.tb').val());    
        var hitung = Math.abs(tinggiBadan - 110);

        localStorage.setItem("Berat Badan", beratBadan);
        localStorage.setItem("Tinggi Badan", tinggiBadan);

        $('.ideal').replaceWith(hitung);

        var skor = Math.abs(beratBadan - hitung);
        $('.skor').replaceWith(skor);

        if (skor >= 0 && skor <= 40) {
            $('.kategori').attr('href','Kalender-olahraga1');
        }

        else if (skor >= 41 && skor <= 80) {
            $('.kategori').attr('href','Kalender-olahraga2');
        }

        else if (skor >= 81){
            $('.kategori').attr('href','Kalender-olahraga3');
        }

        $('.notif-ideal').addClass('notif-ideal-active');
        $('.notif-ideal-active').removeClass('notif-ideal');``
    });

    $('.reset').click(function(){
        location.reload();
    });

    $('.hitungUlang').click(function(){
        localStorage.setItem("Tinggi Badan", 0);
        localStorage.setItem("Berat Badan", 0);
        localStorage.setItem("kategori", 0);
    });
});