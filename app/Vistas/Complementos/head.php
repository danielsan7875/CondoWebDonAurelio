    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> <?php echo $titulo; ?> </title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts: Plus Jakarta Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                    colors: {
                        darkBtn: '#12171E',
                        brandBlue: '#2563eb',
                        subtleText: '#64748b',
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
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        /* Gradient overlay for text readability over background image */
        .hero-overlay {
            background: linear-gradient(180deg, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0.65) 100%);
        }
    </style>