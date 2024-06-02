CREATE DATABASE webapp2db;

CREATE TABLE users (
    user_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name VARCHAR(255),
    username VARCHAR(50),
    email VARCHAR(50),
    phone VARCHAR(50),
    website VARCHAR(50)
);

CREATE TABLE addresses (
    user_id INT,
    street VARCHAR(50),
    suite VARCHAR(50),
    city VARCHAR(50),
    zipcode VARCHAR(50),
    latitude VARCHAR(50),
    longitude VARCHAR(50),
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);

CREATE TABLE companies (
    user_id INT,
    name VARCHAR(50),
    catchPhrase VARCHAR(100),
    bs VARCHAR(50),
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);

INSERT INTO users (name, username, email, phone, website) VALUES 
("Leanne Graham", "Bret", "Sincere@april.biz", "1-770-736-8031 x56442","hildegard.org"), 
("Ervin Howell", "Antonette", "Shanna@melissa.tv", "010-692-6593 x09125", "anastasia.net"),
("Clementine Bauch", "Samantha", "Nathan@yesenia.net", "1-463-123-4447", "ramiro.info"),
("Patricia Lebsack", "Karianne", "Julianne.OConner@kory.org", "493-170-9623 x156","kale.biz"),
("Chelsey Dietrich", "Kamren", "Lucio_Hettinger@annie.ca", "(254)954-1289","demarco.info"),
("Mrs. Dennis Schulist", "Leopoldo_Corkery","Karley_Dach@jasper.info","1-477-935-8478 x6430", "ola.org"),
("Kurtis Weissnat", "Elwyn.Skiles", "Telly.Hoeger@billy.biz","210.067.6132", "elvis.io"),
("Nicholas Runolfsdottir V", "Maxime_Nienow", "Sherwood@rosamond.me", "586.493.6943 x140", "jacynthe.com"),
("Glenna Reichert", "Delphine", "Chaim_McDermott@dana.io", "(775)976-6794 x41206", "conrad.com"),
("Clementina DuBuque", "Moriah.Stanton", "Rey.Padberg@karina.biz", "024-648-3804", "ambrose.net");

INSERT INTO addresses (user_id, street, suite, city, zipcode, latitude, longitude) VALUES
(1, "Kulas Light", "Apt. 556", "Gwenborough", "92998-3874", "-37.3159", "81.1496"),
(2, "Victor Plains", "Suite 879", "Wisokyburgh", "90566-7771", "-43.9509", "-34.4618"),
(3, "Douglas Extension", "Suite 847", "McKenziehaven", "59590-4157", "-68.6102", "-47.0653"),
(4, "Hoeger Mall", "Apt. 692", "South Elvis", "53919-4257", "29.4572", "-164.2990"),
(5, "Skiles Walks","Suite 351", "Roscoeview", "33263", "-31.8129", "62.5342"),
(6, "Norberto Crossing", "Apt. 950", "South Christy", "23505-1337", "-71.4197", "71.7478"),
(7, "Rex Trail", "Suite 280", "Howemouth", "58804-1099", "24.8918", "21.8984"),
(8, "Ellsworth Summit", "Suite 729", "Aliyaview", "45169", "-14.3990", "-120.7677"),
(9, "Dayna Park", "Suite 449", "Bartholomebury", "76495-3109", "24.6463", "-168.8889"),
(10, "Kattie Turnpike","Suite 198", "Lebsackbury", "31428-2261", "-38.2386", "57.2232");

INSERT INTO companies (user_id, name, catchPhrase, bs) VALUES
(1, "Romaguera-Crona", "Multi-layered client-server neural-net", "harness real-time e-markets"),
(2, "Deckow-Crist", "Proactive didactic contingency", "synergize scalable supply-chains"),
(3, "Romaguera-Jacobson", "Face to face bifurcated interface", "e-enable strategic applications"),
(4, "Robel-Corkery", "Multi-tiered zero tolerance productivity", "transition cutting-edge web services"),
(5, "Keebler LLC", "User-centric fault-tolerant solution", "revolutionize end-to-end systems"),
(6, "Considine-Lockman", "Synchronised bottom-line interface", "e-enable innovative applications"),
(7, "Johns Group", "Configurable multimedia task-force", "generate enterprise e-tailers"),
(8, "Abernathy Group", "Implemented secondary concept", "e-enable extensible e-tailers"),
(9,"Yost and Sons", "Switchable contextually-based project", "aggregate real-time technologies"),
(10, "Hoeger LLC", "Centralized empowering task-force", "target end-to-end models");