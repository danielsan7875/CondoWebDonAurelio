   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> <?php echo $titulo; ?></title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- FontAwesome 6 CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts: Plus Jakarta Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Commissioner:wght@100..900&family=IBM+Plex+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"IBM Plex Serif"', 'serif'],
                    },
                    colors: {
                        eduDark: '#191B28',
                        eduLime: '#D4F754',
                        eduLimeHover: '#c1e83f',
                        eduBg: '#E7E5F4',
                        eduCard: '#FAFAFC',
                        eduPurpleLight: '#EEECFB',
                    }
                }
            }
        }
    </script>

    <script>
    window.addEventListener('load', function() {
        const loader = document.getElementById('app-loader');
        if (loader) {
            // Transición suave de opacidad
            loader.classList.add('opacity-0', 'pointer-events-none');
            
            // Remueve el elemento del DOM tras completar la animación (500ms)
            setTimeout(() => {
                loader.style.display = 'none';
            }, 500);
        }
    });
</script>

    <style>
        body {
            font-family: 'IBM Plex Seri', serif;
            background-color: #F7F7FA;
        }
        /* Custom scrollbars */
        ::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }
        ::-webkit-scrollbar-track {
            background: transparent;
        }
        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 9999px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }
    </style>