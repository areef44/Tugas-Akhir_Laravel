<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HomePage</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="relative min-h-[100vh] bg-gray-50">

     {{$slot}}



    <script>

        window.addEventListener('show-delete-confirmation', event => {

                    Swal.fire({
                    title: 'Apakah Anda Yakin?',
                    text: "Anda Tidak Akan Bisa Mengembalikannya Lagi!",
                    icon: 'Perhatian',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, Hapus!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            Livewire.emit('deleteConfirmed')
                        }
                })

        });

           window.addEventListener('categoriesDeleted', event => {

                Swal.fire(
                'Terhapus!',
                'Data Telah Dihapus.',
                'Berhasil'
                )
        });


        //sweet-alert-validation

        $(function(){
            $(document).on('click','#validate',function(e){
                e.preventDefault();
                var link = $(this).attr("href");
                                
                Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                    )
                }
                })
                            })
                        });

   

    </script>
    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @stack('scripts')
    @livewireScripts
</body>
</html>
