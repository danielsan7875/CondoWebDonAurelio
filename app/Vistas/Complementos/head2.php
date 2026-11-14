   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> <?php echo $titulo; ?></title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- FontAwesome 6 CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts: Plus Jakarta Sans -->
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Lepcha&display=swap" rel="stylesheet">    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Noto Sans Lepcha"', 'sans-serif'],
                    },
                    colors: {
                        eduDark: '#0A2D6B',
                        eduLime: '#007BFF',
                        eduLimeHover: '#0158b6',
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
            font-family: "Noto Sans Lepcha", sans-serif;
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