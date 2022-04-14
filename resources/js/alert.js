window.message = function (message) {
    Swal.fire({
        text: message,
        toast: true,
        position: 'top-end',
        confirmButtonColor: '#3490dc',
    });
};
Livewire.on('error', message =>{
    Swal.fire({
        icon: 'error',
        text:message,
        position: 'center'
    })

})
Livewire.on('warning', message =>{
    Swal.fire({
        icon: 'warning',
        text:message,
        position: 'center'
    })

})
Livewire.on('message', msg => {
    message(msg);
});
Livewire.on('success', message => {
    Swal.fire({
        icon: 'success',
        text: message,
        position: 'center'
    })
})