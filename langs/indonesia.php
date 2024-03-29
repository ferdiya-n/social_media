<?php
function lang($txt){
    static $lang = array(
    // home page
    'html_dir' => 'ltr',
    'homeLinks' => 'left',
    'sponsored_align' => 'left',
    'main' => 'Main',
    'my_photos' => 'Galeri',
    'my_posts' => 'Post',
    'settings' => 'Pengaturan',
    'my_notepad' => 'Catatan',
    'new_note' => 'Tulis Catatan',
    'see_all_notes' => 'Lihat catatan',
    'more' => 'Lainnya',
    'advertisement' => 'Iklan',
    'followers' => 'Pengikut',
    'following' => 'Mengikuti',
    'saved_posts' => 'Postingan yang disimpan',
    'sponsored' => 'Supported',
    'w_post_li' => 'left',
    'w_post_li2' => 'right',
    'w_post_align' => 'left',
    'w_post_dir' => 'ltr',
    'post_textbox_placeholder' => 'Bagi ide postinganmu dengan teman lain',
    'post_textbox_align' => 'left',
    'post_now' => 'Post sekarang',
    'w_title_inputText' => 'Tulis sesuatu untuk postingamu (optional)',
    'post_align' => 'left',
    'post_span_float' => 'right',
    'post_options' => 'right',
    'post_content_align' => 'left',
    'comment_field_align' => 'left',
    'comment_field_ph' => 'Tulis komentar ...',
    'comment' => 'Komentar',
    'u_liked_this' => 'Menyukai',
    'liked' => 'Suka',
    'share_now' => 'Berbagi sekarang',
    'comment_time_align' => 'left',
    'comments' => 'Komentar',
    'no_comments' => 'Tidak ada komentar',
    'likes' => 'Suka',
    'no_likes' => 'Jadilah yang pertama',
    'like' => 'Suka',
    'just_now' => 'Baru saja',
    'minute_ago' => 'menit yang lalu',
    'minutes_ago' => 'menit yang lalu',
    'hour_ago' => 'jam yang lalu',
    'hours_ago' => 'jam yang lalu',
    'day_ago' => 'hari yang lalu',
    'days_ago' => 'hari yang lalu',
    'week_ago' => 'minggu yang lalu',
    'weeks_ago' => 'minggu yang lalu',
    'month_ago' => 'bulan yang lalu',
    'months_ago' => 'bulan yang lalu',
    'year_ago' => 'tahun yang lalu',
    'years_ago' => 'tahun yang lalu',
    'HLP_b' => 'homelinksP_borderL',
    'user_info_align' => 'left',
    'comment_field_align' => 'left',
    'edit_profile' => 'Ubah profil',
    'posts_str' => 'Postingan',
    'followers_str' => 'Pengikut',
    'following_str' => 'Mengikuti',
    'uProf_ffTitle_align' => 'left',
    'uProf_followersTitle' => 'pengikut',
    'uProf_urfollowersTitle' => 'pengikut Anda',
    'uProf_followersTitleCheck' => 'id',
    'uProf_followingTitle' => 'mengikuti',
    'uProf_urfollowingTitle' => 'Orang yang Anda ikuti',
    'uProf_followingTitleHe' => 'Dia ',
    'uProf_followingTitleShe' => 'Dia ',
    'uProf_followingTitle1' => 'Orang yang',
    'uProf_followingTitle2' => 'yang mengikuti',
    'followingBtn_str' => 'Mengikuti',
    'followBtn_str' => 'Ikuti',
    'postDropdown' => 'dropdown-menu-right',
    'postDropdownTxtAlign' => 'left',
    'EditPost_DDM' => 'Ubah postingan',
    'DeletePost_DDM' => 'Hapus postingan',
    'reportPost_DDM' => 'Laporkan postingan',
    'savePost_DDM' => 'Simpan postingan',
    'p_title_male' => ' mengganti gambar profil',
    'p_title_famale' => ' mengganti gambar profil',
    'pc_title_male' => ' mengganti gambar cover',
    'pc_title_famale' => ' mengganti gambar cover',
    'not_specified' => 'Tidak spesifik',
    'verified_page' => 'Halaman terverifikasi',
    'my_photos' => 'Galeri',
    'my_photos_align' => 'left',
    'all_postsSTR' => 'Semua postingan',
    'all_postsSTR_align' => 'left',
    'nothingToShow' => 'Kosong',
    'working' => 'bekerja',
    'at' => 'at',
    'lives_in' => 'Tinggal di',
    'born_on' => 'Lahir di',
    'studies' => 'Pendidikan',
    'about' => 'Tentang',
    'bio' => 'Biografi',
    'onlyUcanCThis' => 'Hanya Anda yang dapat melihat ini',
    'save' => 'Simpan',
    'cancel' => 'Batal',
    'uploadPhoto' => 'Upload',
    'addToFavoritePages' => 'Simpan di halaman favorit',
    'unFavoritePage' => 'Halaman tidak favorit',
    'report' => 'Laporkan',
    'textAlign' => 'left',
    'errorPost_n1' => 'Postingan seharusnya tidak kurang dari 15 karakter.',
    'errorPost_n2' => 'Tolong pilih gambar dan lalu coba lagi!',
    'errorPost_n3' => 'Gambar Anda harus dibawah kapasitas 4MB.',
    'errorPost_n4' => 'Gambar Anda bukan format jpeg, jpg, or png file.',
    'errorPost_n5' => 'Terjadi kesalahan saat pemrosesan gambar. Coba lagi.',
    'errorPost_n6' => 'ERROR: foto gagal diupload. Coba lagi.',
    'supportBox' => 'Kotak saran',
    'seeAll' => 'Lihat semua',
    'language' => 'Bahasa',
    'float' => 'left',
    'float2' => 'right',
    'ul_navbar_nav1' => 'nav navbar-nav',
    'ul_navbar_nav2' => 'nav navbar-nav navbar-right',
    'navbar_home' => 'Beranda',
    'notifications' => 'Notifikasi',
    'messages' => 'Pesan',
    'navbar_uMenu_UserProfile' => 'Profil Anda',
    'adminOptions' => 'Admin options',
    'dashboard' => 'Dashboard',
    'terms' => 'Terms',
    'privacyPolicy' => 'Privacy policy',
    'Report_A_Problem' => 'Laporkan masalah',
    'logout' => 'Keluar',
    'navbar_serchBox_ph' => 'Cari..',
    'trending_worldWide' => 'Trending - WorldWide',
    'posts' => 'Postingan',
    'pages' => 'Halaman',
    'reactions' => 'reaksi',
    'by' => 'By',
    'please_wait' => 'Tunggu sebentar...',
    'favourite_pages' => 'Halaman favorit',
    'wpr_public' => 'Publik',
    'wpr_followers' => 'Pengikut',
    'wpr_onlyme' => 'Hanya saya',
    'user_photos' => 'Galeri',
    'stars_str' => 'Bintang',
    'share' => 'bagi',
    'shares' => 'berbagi',
    'no_shares' => 'tidak berbagi',
    'wpost_write' => 'Tulis..',
    'wpost_upPhoto' => 'Foto',
    'wpost_title' => 'Judul',
    'shared_a_Post' => 'Berbagi postingan',
    'comm_edited' => 'Diubah',
    'comm_edit' => 'Ubah komentar',
    'comm_delete' => 'Hapus komentar',
    'comm_report' => 'Laporkan komentar',
    'recently_starts_from' => 'Bintang dari :',
    'load_more' => 'Lainnya',
    'postSaved' => 'Postingan Tersimpan',
    'postSavedBefore' => 'Anda menyimpan post ini sebelumnya!',
    'errorSomthingWrong' => 'Error, terjadi kesalahan! Coba lagi lain kali.',
    'postShared' => 'Postingan dibagi ke timeline Anda.',
    'newLine_Shift_enter' => 'Baris baru &xrarr;',
    'totalPhotos' => 'Total foto',
    'see_all' => 'Lihat semua',
    'likeNotify_str' => 'menyukai postingan Anda',
    'commmentNotify_str' => 'berkomentar dipostingan Anda',
    'shareNotify_str' => 'berbagi postingan Anda',
    'starNotify_str' => 'Anda mendapat bintang dari',
    'followNotify_str' => 'mulai mengikuti Anda',
    'no_notifications' => 'Tidak ada notifikasi',
    'accountSetup' => 'Akun setup',
    'complete' => 'Lengkapi',
    'as_followPeople' => 'Ikuti orang',
    'as_profileInfo' => 'Info profil',
    'as_coverPhoto' => 'Foto cover',
    'as_userPhoto' => 'Foto profil',
    'noMoreStories' => 'Tidak ada postingan',
    'you_have_not_posted_anything_yet' => 'Anda belum memiliki postingan sekarang',
    'has_not_posted_anything_yet' => 'belum memposting sama sekali',
    'not_found' => 'Tidak ditemukan',
    'no_users_like_the_name_you_entered' => 'Nama pengguna yang Anda cari tidak ada',
    'publicPosts' => 'Postingan publik',
    'searchMoreAbout' => 'Cari tentang',
    'advancedSearch' => 'Tingkatkan pencarian',
    'profilePageNotFound_str1' => 'Maaf, halaman ini tidak dapat dimuat',
    'profilePageNotFound_str2' => 'Maaf halaman ini sudah dihapus atau tidak ada!',
    'profilePageNotFound_str3' => 'Kembali ke halaman sebelumnya',
    'posting' => 'Memposting..',
    'hashtag_not_available' => 'Hashtag tidak ditemukan!',
    'news' => 'Berita',
    'tv' => 'Tv',
    'store' => 'Toko',
    'new' => 'Baru',
    'job' => 'Pekerjaan',
    'all_posts_that_you_saved' => 'Semua postingan yang Anda simpan',
    'nothing_saved_yet' => 'Belum tersimpan sekarang',
    'do_you_want_to_delete_this' => 'Anda ingin menghapus ini?',
    'you_can_not_undo_this_after_deleting_it' => 'Anda tidak dapat melihat kembali setelah dihapus',
    'delete' => 'Hapus',
    'open' => 'buka',
    'closed' => 'tutup',
    'you_anonymously_reported_a' => 'Anda melaporkan',
    'post' => 'post',
    'click_to_view_your_report' => 'Klik untuk melihat laporan',
    'replay' => 'Balas',
    'your_report' => 'Laporan Anda',
    'help_us_to_make_our_community_better' => 'Bantu kami membuat komunitas lebih baik',
    'submit' => 'submit',
    'subject' => 'Subjek',
    'your_feedback_helps_us_improve_our_community' => 'Umpan balik Anda dapat membantu komunitas kami menjadi lebih baik',
    'post_reported' => 'Postingan dilaporkan! kami akan melihatnya besok',
    'mynotepad_main_title' => 'Jaga password, kode, catatan, link dan apa saja secara online .. hanya Anda yang dapat melihat dan mengubahnya',
    'newNote_p' => 'Buat catatan rahasia baru, hanya Anda yang dapat melihat dan mengubahnya',
    'newNote_title' => 'Judul catatan',
    'newNote_content' => 'Isi catatan',
    'create' => 'buat',
    'saved' => 'Simpan',
    'current_password_is_incorrect' => 'Password salah',
    'please_fill_required_fields' => 'Tolong isi bagian yang kosong',
    'new_password_doesnt_match_the_confirm_field' => 'Password dan konfirm password tidak sama',
    'changes_saved_seccessfully' => 'perubahan berhasil',
    'remove_account' => 'Hapus akun',
    'general' => 'Umum',
    'male' => 'Laki-laki',
    'female' => 'Perempuan',
    'fullname' => 'Nama lengkap',
    'username' => 'Username',
    'email' => 'Email',
    'required' => 'Diperlukan',
    'new_password' => 'Password baru',
    'confirm_new_password' => 'Konfirmasi password baru',
    'gender' => 'Jenis kelamin',
    'current_password' => 'Password',
    'save_changes' => 'Simpan perubahan',
    'education' => 'Pendidikan',
    'work' => 'Pekerjaan',
    'work_title' => 'Bidang pekerjaan',
    'work_place' => 'Tempat kerja',
    'at' => 'di',
    'country' => 'Kota',
    'birthday' => 'Tanggal lahir',
    'website' => 'Website',
    'bio' => 'Bio',
    'profile_pic_shape' => 'Foto profil',
    'circle' => 'Circle',
    'square' => 'Square',
    'remove_account' => 'Hapus akun',
    'remove_account_note' => 'Anda tidak dapat mengembalikan semua data ketika menekan tombol <b>Hapus akun</b>',
    'loadmore' => 'Lihat lebih',
    'users' => 'Pengguna',
    'males' => 'Laki-laki',
    'females' => 'Perempuan',
    'completed_profiles' => 'Profil lengkap',
    'stars' => 'Bintang',
    'notes' => 'Catatan',
    'verified_users' => 'Pengguna terverifikasi',
    'admins' => 'Admin',
    'verify_badge' => 'Verifikasi badge',
    'verify_user' => 'Verifikasi pengguna',
    'remove_verifyBadge' => 'Hapus verifikasi badge',
    'edit_delete_dashboard' => 'Ubah / Hapus',
    'verify_badge_removed_succ_from' => 'Verifikasi hapus badge berhasil dari',
    'verified_successfully' => 'Verifikasi berhasil',
    'user_doesnt_exist' => 'Pengguna ini tidak ada!',
    'yes' => 'Ya',
    'no' => 'Tidak',
    'upgradeToAdmin' => 'Ganti menjadi admin',
    'password' => 'Password',
    'username_allowed_error' => 'Karakter spesial atau spasi tidak diperbolehkan, hanya "_","." yang diperbolehkan antar kata',
    'user_already_exist' => 'Username sudah ada!',
    'uCannot_access_admin_data' => 'Anda tidak dapat mengubah, menghapus atau mengakses data admin!',
    'uCan_access_your_data_from_settings' => 'Anda adalah admin di platform ini, Anda dapat mengakses, mengubah atau menghapus data dari pengaturan',
    'from' => 'Dari',
    'time' => 'Waktu',
    'options' => 'Opsi',
    'report_about_post' => 'Laporan tentang postingan',
    'dir' => 'ltr',
    'dir2' => 'rtl',
    'activeNow' => 'Aktif sekarang',
    'notActiveNow' => 'Tidak aktif',
    'selectToChat' => 'Pilih chat untuk mengirimkan pesan',
    'user_profile' => 'Profil pengguna',
    'emptyChat' => 'Anda belum memulai percakapan .. ucapakan hallo untuk memulai percakapan',
    'you' => 'Anda',
    'write_a_message' => 'Tulis pesan..',
    'search' => 'Cari..',
    'welcome' => 'Selamat datang',
    'help' => 'Bantuan',
    'login' => 'Masuk',
    'signup' => 'Daftar',
    'welcome_to' => 'Selamat datang di',
    'wallstant_main_string' => 'Bertemu teman baru dan terus terhubung dengan keluarga serta dengan seseorang yang Anda sayangi kapanpun dimanapun',
    'login_now' => 'Masuk sekarang',
    'forgot_password' => 'Lupa password?',
    'dont_have_an_account' => 'Belum punya akun?',
    'for_free' => 'gratis',
    'email_or_username' => 'Username atau email',
    'loading' => 'Memuat',
    'create_new_account' => 'Buat akun baru',
    'create_account' => 'Buat akun',
    'confirm_password' => 'Konfirm password',
    'by_clicking_signup_str' => 'Setelah membuat akun, Anda menyetujui',
    'and' => 'dan',
    'cookie_use' => 'Penggunaan cookie',
    'already_have_an_account' => 'Sudah punya akun',
    'creating_your_account' => 'Membuat akun Anda',
    'done' => 'selesai',
    'enter_un_pwd_to_login' => 'Masukkan username atau email dan password untuk masuk',
    'enter_username_to_login' => 'Masukkan username',
    'enter_password_to_login' => 'Masukkan passwword',
    'cannot_login_attempts' => 'Anda tidak bisa login sekarang! tunggu (15 menit) dan coba lagi',
    'un_email_not_exist' => 'Username atau email tidak ada',
    'password_incorrect_you_have' => 'Password pengguna salah!',
    'attempts_to_login' => 'upaya untuk masuk',
    'un_and_pwd_incorrect' => 'Nama pengguna dan password salah',
    'email_already_exist' => 'Alamat email sudah digunakan',
    'password_short' => 'Password minimal 6 karakter',
    'password_not_match_with_cpassword' => 'Password dan konfirm password tidak sama',
    'invalid_email_address' => 'Email tidak valid',
    'signup_username_should_be_1' => 'Karakter spesial tidak diperbolehkan',
    'signup_username_should_be_2' => 'Nama pengguna harus dalam bahasa inggris',
    'signup_username_should_be_3' => 'Hanya ( _ ) yang diperbolehkan diantara kata',
    'signup_username_should_be_4' => 'Angka dan huruf diperbolehkan',
    'signup_username_should_be_5' => 'Spasi tidak diperbolehkan diantara kata',
    'username_not_allowed' => 'Kesalahan pada username',
    'username_not_exists' => 'Pengguna tidak ada!',
    'friends' => 'Teman',
    'requests' => 'Meminta',
    'continue_reading' => 'Lanjutkan membaca',


   // ==========================================

    );
    return $lang[$txt];
}

?>