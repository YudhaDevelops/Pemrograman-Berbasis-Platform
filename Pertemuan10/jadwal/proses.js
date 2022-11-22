var btn = document.getElementById('btnSubmit');
btn.style.display = "none";

var input_filter = document.getElementById('filter');

// jam masuk
$('#jam_masuk_filter').on('change', function () {
    const data = $('#jam_masuk_filter option:selected').attr('value');
    $('[name=filter]').val(data);
    $('[name=by]').val("jam_masuk");
    btn.click();
})

// jam keluar
$('#jam_keluar_filter').on('change', function () {
    const data = $('#jam_keluar_filter option:selected').attr('value');
    $('[name=filter]').val(data);
    $('[name=by]').val("jam_keluar");
    btn.click();
})

// hari 
$('#hari_filter').on('change', function () {
    const data = $('#hari_filter option:selected').attr('value');
    $('[name=filter]').val(data);
    $('[name=by]').val("hari");
    btn.click();
})

// kelas
$('#kelas_filter').on('change', function () {
    const data = $('#kelas_filter option:selected').attr('value');
    $('[name=filter]').val(data);
    $('[name=by]').val("kelas");
    btn.click();
})