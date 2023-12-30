const modalTambahUser = new bootstrap.Modal('#tambahUser');
const modalTambahRute = new bootstrap.Modal('#tambahRute');
const sNorm = $('.s_norm').data('swal');
const notif = $('.notif').data('notif');

function bukaTambahUser(){
    modalTambahUser.show();
}
function bukaTambahRute(){
    modalTambahRute.show();
}

if(notif){
    console.log(notif);
}

if (sNorm) {
    Swal.fire({
    icon: 'success',
    title: 'Berhasil ' + sNorm,
    timer: 2000,
    showConfirmButton: false
    })
}

function coba(){
    console.log('asd');
}

function hapusData(a, id) {
    Swal.fire({
    icon: 'warning',
    title: 'Hapus Data',
    text: 'Apakah anda yakin mengapus data ' + a,
    showDenyButton: true,
    confirmButtonText: 'Iya',
    denyButtonText: 'Tidak',
    }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
    if (result.isConfirmed) {
        window.location.href = '/admin/delete_' + a + '/' + id;
    } else if (result.isDenied) {
        Swal.fire({
    icon: 'info',
    title: 'Perubahan Tidak Disimpan',
    timer: 1500,
    showConfirmButton: false
        })
    }
    })
}