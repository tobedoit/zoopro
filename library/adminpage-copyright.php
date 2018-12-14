<?php

/* 관리자 페이지 푸터 카피라이트 변경 
=============================================== */
function remove_footer_admin () {echo '쭈:프로덕션 관리자 페이지입니다.';}
add_filter('admin_footer_text', 'remove_footer_admin');

?>