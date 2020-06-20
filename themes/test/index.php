<!DOCTYPE html>
<html lang="ja">
　　<head>
　　　　<meta charset="UTF-8">
　　　　　　<title><?php wp_title ( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
　　</head>
　　<body>
　　　　<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
　　　　　　<!-- 投稿表示ここから -->
　　　　　　<h2><?php the_title(); ?></h2>
　　　　　　<?php the_content(); ?>
　　　　　　<!-- //投稿表示ここまで -->
　　　　<?php endwhile; ?>
　　　　　　<!-- ページ送りなど -->
　　　　<?php else: ?>
　　　　　　<!-- 記事がない時の表示 -->
　　　　<?php endif; ?>
　　</body>
</html>