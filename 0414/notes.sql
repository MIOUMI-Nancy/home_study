-- VSCODE安裝MYSQL的套件>搜尋MYSQL>淺藍色的
-- 輸入連結(localhost)>(帳號)>(密碼)>ENTER>沒有加密就ENTER


-- ● 合併查詢
-- SELECT * FROM `products` 
-- JOIN `categories` 
-- ON `products`.`category_sid` = `categories`.`sid`

-- ● 只從`products`.*(products的全部內容)和`categories`.`name`(categories中的NAME欄位的內容)進行合併查詢
-- SELECT `products`.*,`categories`.`name` 
-- FROM `products` JOIN `categories` 
-- ON `products`.`category_sid` = `categories`.`sid`

-- ● 簡寫代稱
-- SELECT p.*,c.`name` 
-- FROM `products` AS p JOIN `categories` AS c 
-- ON p.`category_sid` = c.`sid`

-- ● 篩選查詢後改名子(categories的name改cate_nam)

-- SELECT p.*,c.`name` cate_nam
-- FROM `products` AS p JOIN `categories` AS c 
-- ON p.`category_sid` = c.`sid`


-- ● JOIN 和 LEFT JOIN 區別
-- >JOIN 表單前後沒有區別
-- >LEFT JOIN 以前(左)表單/////所有內容/////去尋找後(右)表單是否有對應內容(前表單會全部顯示，如後表單沒對應容會顯示空質)


-- ● 文字條件搜尋
-- SELECT * FROM `products` WHERE `author` LIKE '%陳%'(只要有陳即可)
-- SELECT * FROM `products` WHERE `author` LIKE '陳%'(必須開頭為陳)
-- SELECT * FROM `products` WHERE `author` LIKE '%陳'(必須結尾為陳)

-- SELECT * FROM `products` WHERE `author` LIKE '%科技%' OR `bookname` LIKE '%科技%'(或 即可)
-- SELECT * FROM `products` WHERE `author` LIKE '%科技%' AND `bookname` LIKE '%科技%'(與 都)
-- (全形空白也不行，有錯的時候看看XDDDDD)


-- ● 多個條件搜尋
-- SELECT * FROM `products` WHERE `sid` IN (1,2)
-- SELECT * FROM `products` WHERE `author` IN ('吳睿紘','五島由實')小括號裡面不能用LIKE的那個%的功能只能完全同等
-- SELECT * FROM `products` WHERE `sid` IN (1,2,3,5) ORDER BY 'sid' DESC
-- (ORDER BY: ASC 代表結果會以由小往大的順序列出，而 DESC 代表結果會以由大往小的順序列出,RAND()代表亂數排序)

-- ● SELECT `category_sid`, COUNT (*) num FROM `products` GROUP BY `category_sid`;
-- 依照`category_sid`群組起來

-- ● 自串比大小
-- (一個字一個字比，如打平往後比，當有字元勝利停止比，如前面都相同字多的贏，)
-- $a= '2020-01-29 12:00'
-- $a= '2020-01-30 '

-- ABC是用編碼比(A編碼靠後會比a(編碼靠前)大)
-- 中文字用部首排序，不重要XDDDDDDDDDDDDDDDDDDDD
