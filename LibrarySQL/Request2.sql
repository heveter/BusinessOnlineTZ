SELECT bc1.book_id AS book1, bc2.book_id AS book2, COUNT(bc1.categorie_id) AS category_count
FROM book_categories bc1
INNER JOIN book_categories bc2 ON (bc1.book_id < bc2.book_id) AND (bc1.categorie_id = bc2.categorie_id)
GROUP BY bc1.book_id, bc2.book_id
HAVING category_count >=7;