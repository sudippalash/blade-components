<style>
    .sp-img-upload {
        background-color: #fbfbfb;
        width: 100%;
        margin: 0 auto;
        padding: 10px;
    }
    .sp-img-upload .sp-img-upload-wrap {
        border: 2px dashed #8898aa;
        position: relative;
    }
    .sp-img-upload .sp-img-dropping,
    .sp-img-upload .sp-img-upload-wrap:hover {
        background-color: #8898aa;
        border: 2px dashed #ffffff;
    }
    .sp-img-upload .sp-img-upload-wrap .sp-img-upload-input {
        position: absolute;
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        outline: none;
        opacity: 0;
        cursor: pointer;
    }
    .sp-img-upload .sp-img-upload-wrap h3 {
        font-weight: 60;
        font-size: 18px;
        text-transform: uppercase;
        text-align: center;
        color: #000000;
        padding: 60px 0;
    }
    .sp-img-upload .sp-img-upload-content {
        /* display: none; */
        text-align: center;
        border: 2px dashed #8898aa;
        overflow: hidden;
    }
    .sp-img-upload .sp-img-upload-content .sp-img-upload-box {
        position: relative;
        /* max-height: 300px; */
        max-width: 300px;
        margin: auto;
    }
    .sp-img-upload .sp-img-upload-content .img-btn-wrap {
        padding: 0 15px 15px 15px;
        color: #222;
    }
    .sp-img-container {
        position: relative;
        width: 100%;
    }
    .sp-img-container-image {
        display: block;
        width: 100%;
        height: auto;
    }
    .sp-img-overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        height: 100%;
        width: 100%;
        opacity: 0;
        transition: .3s ease;
        background: rgba(0, 0, 0, 0);
    }
    .sp-img-container:hover .sp-img-overlay {
        opacity: 1;
        background: rgba(0, 0, 0, 0.2);
    }
    .sp-img-overlay-icon {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        text-align: center;
    }
</style>