CREATE TABLE `inventory` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `product_name` text DEFAULT NULL,
  `model` text DEFAULT NULL,
  `sku` text DEFAULT NULL,
  `price` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `qty` text DEFAULT NULL,
  `inventory_date` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `inventory` (`id`, `product_name`, `model`, `sku`, `price`, `status`, `qty`, `inventory_date`) VALUES
(1, 'Product One', 'PO123456789', '20171001', '12', 'In Stock', '500', '11/16/2017'),
(2, 'Product Two', 'PT123456789', '20171002', '15', 'In Stock', '450', '11/16/2017'),
(3, 'Product Three', 'PTT12345678', '20171003', '16', 'Out of Stock', '0', '11/16/2017'),
(4, 'Product Four', 'PF12345678', '20171004', '18', 'In Stock', '425', '11/16/2017');
