//http://localhost:83/programacao/filereader
if (document.getElementById('filereader') != null){
        var fileInput = document.getElementById('fileInput');
        var fileDisplayArea = document.getElementById('fileDisplayArea');

        fileInput.addEventListener('change', function(e) {
            var file = fileInput.files[0];
            var textType = /text.*/;

            if (file.type.match(textType)) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    fileDisplayArea.innerText = reader.result;
                }

                reader.readAsText(file);    
            } else {
                fileDisplayArea.innerText = "Arquivo não Suportado!"
            }
        });
}

