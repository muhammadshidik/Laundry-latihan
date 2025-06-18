  <div class="app-topstrip bg-dark py-6 px-3 w-100 d-lg-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center justify-content-center gap-5 mb-2 mb-lg-0">
        <a class="d-flex justify-content-center" href="#">
          <img src="tmp/assets/images/logos/logo-wrappixel.svg" alt="" width="150">
        </a>

        
      </div>

      <div class="d-lg-flex align-items-center gap-2">
        <!-- bisa ditambah-tambah bagian atas nya -->
        <!-- Bootstrap 5 switch -->
          <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" id="darkModeSwitch" checked>
              <i class="ti ti-settings"></i>
              <label class="form-check-label" for="darkModeSwitch">Dark Mode</label>
          </div>
        <!-- bisa ditambah-tambah bagian atas nya -->
        <div class="d-flex align-items-center justify-content-center gap-2">
          
          <div class="dropdown d-flex">
            <a class="btn btn-primary d-flex align-items-center gap-1 " href="javascript:void(0)" id="drop4"
              data-bs-toggle="dropdown" aria-expanded="false">
              Kembali
            </a>
          </div>
        </div>
      </div>

    </div>

    <script>
      document.addEventListener('DOMContentLoaded', (event) => {
    const htmlElement = document.documentElement;
    const switchElement = document.getElementById('darkModeSwitch');

    // Set the default theme to dark if no setting is found in local storage
    const currentTheme = localStorage.getItem('bsTheme') || 'dark';
    htmlElement.setAttribute('data-bs-theme', currentTheme);
    switchElement.checked = currentTheme === 'dark';

    switchElement.addEventListener('change', function () {
        if (this.checked) {
            htmlElement.setAttribute('data-bs-theme', 'dark');
            localStorage.setItem('bsTheme', 'dark');
        } else {
            htmlElement.setAttribute('data-bs-theme', 'light');
            localStorage.setItem('bsTheme', 'light');
        }
    });
});
    </script>