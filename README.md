# Laravel 10 Mini

Projet de révision de laravel.

## Exemple de requête avec jointure

```
SELECT *
FROM article
INNER JOIN article_image ON article_image.article_id = article.id
INNER JOIN image ON image.id = article_image.image_id;
```
