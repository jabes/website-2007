INSERT INTO `cms`.`clients`
(
  `first`,
  `last`,
  `company`,
  `jobtitle`,
  `street`,
  `city`,
  `province`,
  `country`,
  `postal`,
  `phone`,
  `fax`,
  `mobile`,
  `website`,
  `email`,
  `passwd`,
  `confirm`,
  `privileges`
) VALUES (
  'Justin',
  'Bull',
  'Google',
  'Web Developer',
  '123 Fake St',
  'Vancouver',
  'BC',
  'Canada',
  'A1B2C3',
  '1234567890',
  '1234567890',
  '1234567890',
  'http://jbull.ca/',
  'admin@demo.com',
  PASSWORD('pass123'),
  PASSWORD('pass123'),
  'Admin'
);

INSERT INTO `cms`.`products`
(
  `title`,
  `price`,
  `photo`,
  `category`,
  `dateAdded`,
  `dateModified`
) VALUES (
  'Dirt Bike',
  '$1999.99',
  '1208041381.jpg',
  'vehicles',
  NOW(),
  NOW()
);

INSERT INTO `cms`.`products`
(
  `title`,
  `price`,
  `photo`,
  `category`,
  `dateAdded`,
  `dateModified`
) VALUES (
  'Quad Bike',
  '$3199.99',
  '1208041410.jpg',
  'vehicles',
  NOW(),
  NOW()
);
