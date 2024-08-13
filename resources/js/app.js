// import './bootstrap';
import 'flowbite';
import 'tinymce/tinymce';
import 'tinymce/skins/ui/oxide/skin.min.css';
import 'tinymce/skins/content/default/content.min.css';
import 'tinymce/skins/content/default/content.css';
import 'tinymce/icons/default/icons';
import 'tinymce/themes/silver/theme';
import 'tinymce/models/dom/model';
import "/node_modules/select2/dist/css/select2.css";
import select2 from 'select2';
select2();

import jQuery from 'jquery';
window.$ = jQuery;

// .. After imports init TinyMCE ..
window.addEventListener('DOMContentLoaded', () => {
    tinymce.init({
        selector: '#editor',
        placeholder: 'Type here...',
        license_key: 'gpl',
        /* TinyMCE configuration options */
        skin: false,
        content_css: false,
        menubar: false,
        toolbar: 'undo redo styles bold italic alignleft aligncenter alignright alignjustify | bullist numlist outdent indent'
    });
});