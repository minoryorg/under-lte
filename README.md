# Under LTE

WordPressの標準的なテーマを作ったばい！  
「Under LTE」とは、**Underscores**と**AdminLTE**を合わせたやつ。  
早い話、GoogleさんみたいなUIになるとばい！

### Underscores
<http://underscores.me/>

WordPressの標準的なテーマ。  
「**Theme Name**」にテーマ名を入れて、「**GENERATE**」ボタンを押すだけ。  
簡単にテーマの基礎ができあがり！  

### AdminLTE2
<https://adminlte.io/themes/AdminLTE/index2.html>

Bootstrapを管理画面のデザインに変えてくれるCSSフレームワーク。  
書き方はBootstrapとほぼ同じやけん、勉強しなおさんでもよかと。  
バージョンは2.4を使用。    

## Underscoresから修正した内容

まず、CSSとJSを読み込ませるために「**functions.php**」を変更したと。  
直接ファイルは入れずに、**CDN**を使っとるけん。  
あ、ついでに**Font Awesome**も入れてます。  

### functions.php
    function under_lte_scripts() {
        wp_enqueue_style( 'under-lte-bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
        wp_enqueue_style( 'under-lte-font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
        wp_enqueue_style( 'under-lte-ionicons', '//cdnjs.cloudflare.com/ajax/libs/ionicons/4.0.0-9/css/ionicons.min.css' );
        wp_enqueue_style( 'under-lte-adminlte', '//cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.2/css/AdminLTE.min.css' );
        wp_enqueue_style( 'under-lte-skin', '//cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.2/css/skins/_all-skins.min.css' );
        wp_enqueue_style( 'under-lte-sans', '//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic' );
        wp_enqueue_style( 'under-lte-style', get_stylesheet_uri() );

        wp_enqueue_script( 'under-lte-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
        wp_enqueue_script( 'under-lte-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
        wp_enqueue_script( 'under-lte-jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), '20151215', true );
        wp_enqueue_script( 'under-lte-bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array(), '20151215', true );
        wp_enqueue_script( 'under-lte-fastclick', '//cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.6/fastclick.min.js', array(), '20151215', true );
        wp_enqueue_script( 'under-lte-adminlte', '//cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.2/js/adminlte.min.js', array(), '20151215', true );
        wp_enqueue_script( 'under-lte-sparkline', '//cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js', array(), '20151215', true );
        wp_enqueue_script( 'under-lte-jvectormap', '//cdnjs.cloudflare.com/ajax/libs/jvectormap/2.0.4/jquery-jvectormap.min.js', array(), '20151215', true );
        wp_enqueue_script( 'under-lte-slimscroll', '//cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js', array(), '20151215', true );    
        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
    }

後は、Bootstrapの書き方の通り「**header.php**」ナビを追加したり、検索フォームのレイアウトを変えるために「**searchform.php**」を追加しとーけんね。（詳細はソースを見てね！）  
んでね、当然これだけじゃグリッドレイアウトにならんけん、サイドバー（ウィジェット）やメインコンテンツのレイアウトが崩れるったい。 
Underscoresのベースを変えるのはあんま好きじゃなかけど、、最低限の変更はしとーよ。 
あと、メニューまで変更するのはしんどかったけん、**footer.php**にjQueryで読み込み後に変更するごとした。
他のやり方があったら教えてね。  

### footer.php
    <script type="text/javascript">
    $(function(){
        // Content
        $('body').addClass('hold-transition fixed sidebar-mini <?php echo get_option( 'color' ); ?>');
        $('.sidebar-menu > ul > li').unwrap();
        $('.sidebar-menu > li > a').each(function() {
            $(this).html('<i class="fa fa-circle-o"></i> <span>' + $(this).text() + '</span>');
        });
        $('.navbar-custom-menu ul').addClass('nav navbar-nav');
        // Add to ...
    });
    </script>

## テーマオプションの追加

これだけじゃ面白くなかろ？  
そこで、このテンプレートの目玉！  
6パターンの色を変更できる「テーマオプション」機能を追加しました！  

管理画面の**「外観」＞「テーマオプション」**として追加したばい！  
設定画面は「**admin-option.php**」ていうファイル追加したと。  
ソースはtableタグでベタ書きしとーけん、あんまツッコまんでね...。  

んで、管理画面の設定と値の保存は「functions.php」に書いとるよ。  

### functions.php
    function under_lte_navswatch() {
        add_option('color');
        add_action('admin_menu', 'option_menu_create');
        function option_menu_create() {
            add_theme_page(esc_attr__( 'Theme Options' ), esc_attr__( 'Theme Options' ), 'edit_themes', basename(__FILE__), 'option_page_create');
        }
        function option_page_create() {
            $saved = under_lte_save_option();
            require TEMPLATEPATH.'/admin-option.php';
        }
    }
    function under_lte_save_option() {
        if (empty($_REQUEST['color'])) return;
        $save = update_option('color', $_REQUEST['color']);
        return $save;
    }
    add_action('init', 'under_lte_navswatch');

実際に読み込んでいるところはココやけん。  

### functions.php
    <script type="text/javascript">
    $(function(){
        ...
        $('body').addClass('hold-transition fixed sidebar-mini <?php echo get_option( 'color' ); ?>');
        ...
    });
    </script>

説明はここまで。  
home.phpとかはあえて作らんかった。  
そんなもん固定ページでなんとかなろーもん？  
まぁ、色々言いたいことあるやろーけど、ベースのテンプレートを作るってことで、これくらいにしとこ。  
