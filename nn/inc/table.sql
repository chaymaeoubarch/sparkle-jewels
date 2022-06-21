
	CREATE TABLE IF NOT EXISTS categories(
		categorie_id INT NOT NULL,
		categorie_name VARCHAR(120),
		PRIMARY KEY (categorie_id)
	);


	CREATE TABLE IF NOT EXISTS products(
		product_id INT NOT NULL,
		categorie_id INT NOT NULL,
		prodcut_name  VARCHAR(255) NOT NULL,
		price INT NOT NULL,
		stock INT NOT NULL,
		productDescription VARCHAR(255),
		imageSrc VARCHAR(255),
		PRIMARY KEY(product_id),
		FOREIGN KEY (categorie_id) REFERENCES categories(categorie_id) 
	);



INSERT INTO `categories` (`categorie_id`,`categorie_name`) VALUES
(1,'earings'),
(2,'necklaces'),
(3,'rings'),
(4,'bracelets') ;



INSERT INTO `products` (`categorie_id`, `prodcut_name`, `price`, `stock`, `productDescription`, `product_id`,`imageSrc`)VALUES
(1, 'Bold Pearl Drop Earrings', 78, 50, 'First thing’s first, these are not your grandmother’s pearls. \r\n        Wear them solo or stack them up, either way, they were made to be seen. \r\n        Handcrafted in 18k gold vermeil with freshwater pearls.\r\n- Set with freshwater cultured pearls. Made ', 12,'earrings/earrings1.jpg.jpg,earrings/earrings11.jpg'),
(1, 'Charlotte Hoops', 199, 40, 'A sweet addition to your patisserie, inspired by the iconic French dessert. \r\n        These huggies are your staple statement piece. Handcrafted in 18k gold vermeil,\r\n         it’ll take first place in your ear stack.\r\n- Width: 6.60 mm\r\n- Length: 12.50 mm', 13,'earrings/earrings2.jpg,earrings/earrings22.jpg'),
(1, ' Bold Small Hoops', 101, 1000, 'You know them, you love them: they\'re your favorite hoops. \r\n        Those outfit-elevating, mood-boosting, can\'t-go-wrong hoops.\r\n         Upgrade your eardrobe with this bold piece that’s handcrafted in recycled 14k solid gold.\r\n- Diameter: 15 mm.\r\n- Wi', 14,'earrings/earrings3.jpg,earrings/earrings33.jpg'),
(1, ' Large Hoops', 88, 1500, 'As basic as your white tee (seriously)! Handcrafted in hollowed 14k solid gold, \r\n        these are our lightest hoops ever. Wear them all day, everyday - even while swimming,\r\n         just remember to take them off before sleeping.\r\n- Made in hollowed 1', 15,'earrings/earrings4.jpg,earrings/earrings44.jpg'),
(1, 'Block Large Hoops ', 98, 0, 'Build with a pointed statement that’s stackable,\r\n         mixable and very wearable. Inspired by angular, modernist architecture and handcrafted in 18k gold vermeil. \r\n         Add some edge(s) and follow your two-tone dreams by pairing both shades toget', 16,'earrings/earrings5.jpg,earrings/earrings55.jpg'),
(1, 'Pavé Diamond Climbers ', 180, 2000, 'Zhuzh up your ear stack with a pavé diamond head-turner that doubles your ear’s real estate.\r\n         Single piercing or not. Handcrafted in 14k solid gold and set with pavé diamonds.\r\n- Diamond clarity: SI 1-2.\r\n- Diamond color: G-H.\r\n- Diamond size: 1.', 17,'earrings/earrings6.jpg,earrings/earrings66.jpg'),
(1, 'X Hoop Earrings', 99, 195, 'Inspired by the endearing signoff, the XO edition celebrates affection between friends, lovers, \r\n        mothers and daughters, or, best of all, yourself. One of four pieces, \r\n        the X Hoop Earrings are handcrafted in 14k solid gold featuring a gen', 18,'earrings/earrings7.jpg,earrings/earrings77.jpg'),
(1, 'Medium Tube Hoops', 157, 843, 'You know them, you love them: they\'re your favorite hoops. Those outfit-elevating, \r\n        mood-boosting, can\'t-go-wrong hoops. \r\n        Upgrade your eardrobe with this bold piece that’s handcrafted in recycled 14k solid gold.\r\n- Diameter: 18 mm.\r\n- Wi', 19,'earrings/earrings8.jpg,earrings/earrings88.jpg'),
(1, 'Pearl Hoops', 78, 43, 'The perfect minimal statement. Handcrafted in vermeil, \r\n        a thick 18k gold layer on sterling silver with a freshwater pearl.\r\n         No one pearl will look the same, and that\'s the beauty of it. Each pearl is handpicked \r\n         + completely un', 20,'earrings/earrings9.jpg,earrings/earrings99.jpg'),
(2, 'Bold Chain Necklace', 250, 845, 'Your boyfriend denim just found its match. It’s handcrafted in 14k solid gold. Raw, \r\n        loose, and bold. Wear it every day – whenever, wherever.\r\n- Made in 14k solid gold, the alloy gives our pieces its beautiful, subtle hue.\r\n- Length: 18 inches.\r\n', 21,'necklaces/necklace1.jpg.jpg,necklaces/necklace11.jpg'),
(2, 'Layered Opal Necklace', 459, 500, 'Shoo away your stacking woes with two chains bound seamlessly with a AAA quality cabochon cut opal pendant. \r\n        Handcrafted in 18k gold vermeil.\r\n- Length: 15 inches - 17 inches.\r\n- Width: 1 mm.\r\n- Stone size: 4 mm.', 22,'necklaces/necklace2.jpg.jpg,necklaces/necklace22.jpg'),
(2, 'Dot Chain Necklace', 340, 0, 'This necklace is perfect for all occasions. Even when you don\'t have one. \r\n        Handcrafted in 14k solid gold with five diamonds. \r\n        A piece you can hold on to forever (to pass on or keep all to yourself).\r\n- Made in 14k solid gold set with 5 h', 23,'necklaces/necklace3.jpg.jpg,necklaces/necklace33.jpg'),
(2, 'Pearl Toggle Necklace', 250, 500, 'We’re not asking you to pick favorites but here’s one pearl necklace to rule them all. \r\n        Handcrafted in 14k solid gold.\r\n- Set with freshwater cultured pearls. Made in 14k solid gold, the alloy that gives our pieces its beautiful, subtle hue.\r\n- P', 24,'necklaces/necklace4.jpg.jpg,necklaces/necklace44.jpg'),
(2, 'Engravable Tag Necklace', 699, 0, 'Think our classic engravable necklace, but just a little daintier. \r\n        Handcrafted in 14k solid gold, this is a piece you can hold onto forever. \r\n        Add your personal touch by engraving an initial, for yourself or your fave person. \r\n        I', 25,'necklaces/necklace5.jpg.jpg,necklaces/necklace55.jpg'),
(2, 'Bold Pearl Pendant Necklace', 548, 20, 'An even bolder spin on a well-loved classic, this pearl pendant was made to be stacked and seen. \r\n        Handcrafted in 18k gold vermeil and a freshwater pearl.\r\n- Set with a freshwater cultured pearl. Made in gold vermeil: a thick 18k gold layer on ste', 26,'necklaces/necklace6.jpg.jpg,necklaces/necklace66.jpg'),
(2, 'Round Topaz Necklace', 98, 0, 'You’re right, this is the perfect gift. Get them a fresh, \r\n        clear-cut statement piece that goes with everything they own. Handcrafted in 18k gold vermeil, set with a round cut topaz gemstone.\r\n- Length: 16 - 18.\r\n- Stone Size: 4 mm.', 27,'necklaces/necklace7.jpg.jpg,necklaces/necklace77.jpg'),
(2, 'Charlotte Pendant Necklace', 350, 1340, 'A sweet addition to your patisserie, inspired by the iconic French dessert. \r\n        Turns out you can have your cake and eat it too. Handcrafted in 14k solid gold.\r\n- Adjustable chain length 16 to 18 inches.\r\n- Pendant length: 10 mm.\r\n- Pendant width: 6', 28,'necklaces/necklace8.jpg.jpg,necklaces/necklace88.jpg'),
(2, 'Horizontal Engravable Bar Necklace', 345, 130, 'DESCRIPTION & DETAILS\r\nWe took everyone\'s favorite, the Engravable Necklace, and elevated the design.\r\n The bar has a sleek, minimal design and is handcrafted in 14k solid gold. It allows you to engrave up to seven letters, so let your imagination run wil', 29,'necklaces/necklace9.jpg.jpg,necklaces/necklace99.jpg'),
(3, 'Diamonds Open Ring', 299, 100, 'Two is better than one. With a bezel setting these 0.03 carat ethically sourced diamonds dance. \r\n        The open design makes this ring stand out even when stacked with friends, like the Stacker, Twist or Beaded Rings.\r\n- Made in 14k solid gold set with', 30,'rings/ring1.jpg.jpg,rings/ring.11.jpg'),
(3, 'Block Ring', 200, 3900, 'Build with a pointed statement that’s stackable, mixable and very wearable.\r\n         Inspired by angular, modernist architecture and handcrafted in 18k gold vermeil.\r\n         Add some edge(s) and follow your two-tone dreams by pairing both shades togeth', 31,'rings/ring2.jpg.jpg,rings/ring.22.jpg'),
(3, 'Croissant Dôme Ring', 99, 40, 'Looking like a French girl isn’t as difficile as it seems. Handcrafted in vermeil, a thick 18k gold layer on sterling silver. \r\n        Consider this croissant-inspired ring to make all your Parisian dreams come true.\r\n- Made in gold vermeil: a thick 18k ', 32,'rings/ring3.jpg.jpg,rings/ring.33.jpg'),
(3, 'Wishbone Stacker Set', 450, 1100, 'It takes two to start a perfect ring stack. Tame the fates with two good luck charms handcrafted in 14k solid gold \r\n        and one set with pavé diamonds.\r\n- Width: 1 mm.\r\n- Total carat weight: 0.094 ct.\r\n- All products in set must be returned together ', 33,'rings/ring4.jpg.jpg,rings/ring.44.jpg'),
(3, 'Wishbone Ring', 128, 580, 'Tame the fates with a good luck charm that doubles as the perfect stacker. \r\n        Handcrafted in 14k solid gold.\r\n- Width: 1 mm.', 'rings/ring5.jpg.jpg,rings/ring.55.jpg'),
(3, 'Bold Beaded Ring', 300, 0, 'A plush and elevated take on our iconic Charlotte collection—inspired by the classic French dessert. \r\n        Handcrafted in 14k solid gold, this cushiony ring is the best accent for your stack with its slim yet playful design. \r\n        Looks best style', 34,'rings/ring6.jpg.jpg,rings/ring.66.jpg'),
(3, 'Diamonds Band', 375, 10, 'However big or small the occasion–treat yourself or them whenever. \r\n        Handcrafted in 14k solid gold with diamonds, hold on to it forever, and ever.\r\n- Handcrafted in 14k solid gold, set with conflict-free and socially responsible diamonds.\r\n- Diamo', 35,'rings/ring7.jpg.jpg,rings/ring.77.jpg'),
(3, 'Black Onyx Square Signet Ring', 600, 20, 'Black and gold—a natural fit. Handcrafted in 14k solid yellow gold and black onyx,\r\n         featuring our signature Men’s Edition black enamel line.Plays well with the Black Onyx Pendant Necklace.\r\n- Made in 14k solid gold, the alloy gives our pieces its',36, 'rings/ring8.jpg.jpg,rings/ring.88.jpg'),
(3, 'Snake Ring', 432, 40, 'Love at first bite. Meet the snake ring that’ll charm them all. \r\n        A symbol of eternity and rebirth, handcrafted in 14k solid gold.\r\n- Band thickness: 1.30 mm - 3.20 mm.\r\n- Band width: 2.80 mm - 10 mm.', 37,'rings/ring9.jpg.jpg,rings/ring.99.jpg'),
(4, 'Double Curb Chain Bracelet', 78, 200, 'Double the chain, double the gold. This one’s a statement, not a gesture.\r\n- Made in gold vermeil: a thick 18k gold layer on sterling silver.\r\n- Width: 4 mm.', 38,'bracelets/bracelet1.jpg.jpg,bracelets/bracelet.11.jpg'),
(4, 'Dual Pearl Bracelet', 89, 70, 'You can, in fact, have it both ways. Cool things down and create limitless looks with intentional contrast. \r\n        Handcrafted in sterling silver featuring near-round freshwater pearls. For a stacking cheat code: here’s your mix of two bracelets in one', 39,'bracelets/bracelet2.jpg.jpg,bracelets/bracelet.22.jpg'),
(4, 'Boyfriend Bold Bracelet', 260, 245, 'Wrist, meet bold link chain bracelet. This is going to be fun.\r\n- Made in gold vermeil: a thick 18k gold layer on sterling silver.\r\n- Width: 4.70 mm.', 40,'bracelets/bracelet3.jpg.jpg,bracelets/bracelet.33.jpg'),
(4, 'Croissant Dôme Cuff Bracelet', 150, 1000, 'A Croissant Dôme-inspired ray of sunshine—for your wrist. \r\n        Pair it with the Croissant Dôme Cuff Bracelet for the ultimate power cuff-le. Handcrafted in 18k gold vermeil,\r\n         a thick layer of 18k gold over sterling silver.\r\n- 6.5 inches: 57m', 41,'bracelets/bracelet4.jpg.jpg,bracelets/bracelet.44.jpg'),
(4, 'Micro-Pavé Diamond Rivière Bracelet', 989, 0, 'When the occasion calls for a grand entrance, the Rivière edition is here for every milestone. \r\n        Handcrafted in 14k solid gold featuring as many as 176 diamonds, with an average total carat weight 0.40 or 0.50 that are knife edge bezel set to crea', 42,'bracelets/bracelet5.jpg.jpg,bracelets/bracelet.55.jpg'),
(4, 'Engravable Bar Bracelet', 130, 450, 'We took everyone\'s favorite, the Engravable Bracelet, and elevated the design. \r\n        The bar has a sleek, minimal design and is handcrafted in 14k solid gold. \r\n        It allows you to engrave up to ten letters, so let your imagination run wild.\r\n- M', 43,'bracelets/bracelet6.jpg.jpg,bracelets/bracelet.66.jpg'),
(4, 'Bold Pearl Double Wrap Bracelet', 128, 500, 'First thing’s first, these are not your grandmother’s pearls. Wear them solo or stack them up, either way, they were made to be seen. \r\n        Handcrafted in gold vermeil, a thick layer of 18k gold over sterling silver, and set with freshwater pearls. Av', 44,'bracelets/bracelet7.jpg.jpg,bracelets/bracelet.77.jpg'),
(4, 'Diamond Station Bracelet', 175, 400, 'Square cut or pear-shaped, you get the gist. But how about floating? Let this floating diamond bracelet do the talking.\r\n- Made in 14k solid gold set with 3 high-quality diamonds (SI 1- 2 clarity). Conflict-free and socially responsible diamonds only.\r\n- ', 45,'bracelets/bracelet8.jpg.jpg,bracelets/bracelet.88.jpg'),
(4, 'Pavé Diamond Round Bracelet', 355, 200, 'How to fulfill your wrist stacking dreams, you ask? The answer’s in this bracelet—or three or four of them. \r\n        Handcrafted in 14k solid gold, featuring 19 ethically sourced and conflict-free pavé diamonds on a rolo chain.\r\n- Chain thickness: 1.6 mm', 46,'bracelets/bracelet9.jpg.jpg,bracelets/bracelet.99.jpg');
COMMIT;