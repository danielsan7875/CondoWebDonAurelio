        </main>
    </div>

<!-- Toggle Mobile Sidebar JS -->
<script>
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const sidebar = document.getElementById('sidebar');

    mobileMenuBtn.addEventListener('click', () => {
        sidebar.classList.toggle('hidden');
    });
</script>