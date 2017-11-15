ホームURL
<?php echo esc_url( home_url() ); ?>

現在のページのURL
<?php echo get_the_permalink(); ?>

テンプレートファイル出力
<?php get_header(); ?>

固定ページ判定
<?php is_page($page); ?>

投稿ページ判定
<?php is_single($post); ?>

カテゴリーページ判定
<?php is_category($category); ?>

投稿パーマリンク取得
<?php $permalink = get_permalink($id); ?>

投稿のカテゴリー取得
<?php $cat = get_the_category($id); ?>

投稿サムネイル取得
<?php echo get_the_post_thumbnail($post_id, $size, $attr); ?>

条件分岐（ホームの判定）
<?php if ( is_home() || is_front_page() ) : ?>
<?php else: ?>
<?php endif; ?>

ショートコードをテンプレートに使用
<?php echo do_shortcode('[＊＊＊＊＊]'); ?>
