<script>
    function spReadUpload(input, id) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById(`${id}_sp_img_upload_wrap`).style.display = 'none';
                document.getElementById(`${id}_sp_img_upload_box`).innerHTML = `<div class="sp-img-container">
                    <img src="${e.target.result}" class="sp-img-container-image" />
                    <div class="sp-img-overlay">
                        <a class="sp-img-overlay-icon">
                            <button type="button" onclick="spRemoveImage('${id}')" class="btn btn-danger btn-sm">x</button>
                        </a>
                    </div>
                </div>`;
                document.getElementById(`${id}_sp_img_upload_content`).style.display = 'block';
                
                document.getElementById(`${id}_is_removed`).value = 0;
            };
            reader.readAsDataURL(input.files[0]);
        } else {
            spRemoveImage(id);
        }
    }
    function spRemoveImage(id) {
        document.getElementById(`${id}_is_removed`).value = 1;
        document.getElementById(`${id}_file`).value = null;
        document.getElementById(`${id}_sp_img_upload_content`).style.display = 'none';
        document.getElementById(`${id}_sp_img_upload_wrap`).style.display = 'block';
    }

    let target = document.getElementsByClassName('sp-img-upload-wrap');
    target[0].addEventListener('dragover', (e) => {
        target[0].classList.add('sp-img-dropping');
    });
    target[0].addEventListener('dragleave', (e) => {
        target[0].classList.remove('sp-img-dropping');
    });
</script>