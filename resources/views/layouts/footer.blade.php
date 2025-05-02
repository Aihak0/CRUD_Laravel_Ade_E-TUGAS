        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('sbAdmin/js/scripts.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('sbAdmin/assets/demo/chart-area-demo.js') }}"></script>
        <script src="{{ asset('sbAdmin/assets/demo/chart-bar-demo.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('sbAdmin/js/datatables-simple-demo.js') }}"></script>
        <script src="{{ asset('sweetalert/dist/sweetalert2.all.min.js') }}"></script>
        <script>
            @if (session('success'))
            Swal.fire({
                title: "Sukses!",
                text: "{{ session('success') }}",
                icon: "success"
            });
            @endif  
            @if (session('error'))
                Swal.fire({
                    title: "Nakal!",
                    text: "{{ session('error') }}",
                    icon: "error"
                });
    
            @endif
        </script>