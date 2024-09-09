  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- asset plugin datatables-->
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>
  <script src="https://cdn.datatables.net/2.1.4/js/dataTables.bootstrap5.js"></script>

  <!-- load font awesome-->
  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

  <script type="importmap">
    {
                "imports": {
                    "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.js",
                    "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/43.0.0/"
                }
    }
        </script>
  <script type="module">
    import {
      ClassicEditor,
      Essentials,
      Paragraph,
      Bold,
      Italic,
      Font
    } from 'ckeditor5';

    ClassicEditor
      .create(document.querySelector('#alamat'), {
        plugins: [Essentials, Paragraph, Bold, Italic, Font],
        toolbar: [
          'undo', 'redo', '|', 'bold', 'italic', '|',
          'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
        ]
      })
      .then(editor => {
        window.editor = editor;
      })
      .catch(error => {
        console.error(error);
      });
  </script>
  <!-- A friendly reminder to run on a server, remove this during the integration. -->
  <script>
    window.onload = function() {
      if (window.location.protocol === "file:") {
        alert("This sample requires an HTTP server. Please serve this file with a web server.");
      }
    };
  </script>

  <script>
    new DataTable('#table');
  </script>

  </body>

  </html>