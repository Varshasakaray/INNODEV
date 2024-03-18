<?php

$random_texts = [
    "Artificial intelligence (AI) is a branch of computer science that aims to create intelligent machines capable of performing tasks that typically require human intelligence. AI systems can learn from data, identify patterns, and make decisions with minimal human intervention. These systems are used in various fields, including healthcare, finance, transportation, and entertainment, to automate processes, improve efficiency, and enhance decision-making. AI technologies such as machine learning, natural language processing, and computer vision are advancing rapidly, enabling AI systems to perform increasingly complex tasks. However, concerns about AI ethics, bias, and job displacement have also emerged, highlighting the need for responsible AI development and deployment. Overall, AI has the potential to revolutionize industries and transform society, but its impact depends on how it is developed and used.",
    "Cricket is a popular sport played between two teams, each consisting of eleven players, on a circular grass field. The game is believed to have originated in England and has since gained immense popularity worldwide, especially in countries like India, Australia, England, Pakistan, and South Africa. Cricket matches are typically played over several hours or days, with breaks for meals and rest. The game involves batting, bowling, and fielding, with the aim of scoring more runs than the opposing team. A cricket match can have several formats, including Test cricket, One Day Internationals (ODIs), and Twenty20 (T20) cricket, each with its own rules and duration. Cricket has produced many legendary players, such as Sachin Tendulkar, Sir Don Bradman, and Brian Lara, who are revered for their skill and contribution to the sport. The game has a rich history, with iconic moments like the 'Ashes' series between England and Australia and the thrilling finishes in limited-overs matches. Cricket is not just a sport but also a cultural phenomenon, bringing people together and inspiring passion and loyalty among fans.",
    "Football, known as soccer in some countries, is the world's most popular sport, played and watched by millions globally. It is played between two teams, each with eleven players, on a rectangular field with goals at each end. The objective is to score goals by getting the ball into the opposing team's goal. Football matches are typically played in two halves of 45 minutes each, with extra time and penalty shootouts used to determine the winner in case of a draw. The sport is governed by the rules of the International Football Association Board (IFAB). Football has a rich history and is deeply ingrained in the culture of many countries. It has produced iconic players like Pelé, Diego Maradona, and Cristiano Ronaldo, who have left a lasting impact on the game. Major football tournaments include the FIFA World Cup, UEFA European Championship, and the Copa America, which attract massive global audiences. Football has the power to unite people across different cultures and backgrounds, creating a sense of community and passion among fans worldwide.",
    "Tourism in India is a vibrant industry with a rich cultural and historical heritage, diverse landscapes, and a variety of attractions. India is known for its ancient monuments, such as the Taj Mahal, Qutub Minar, and Red Fort, which are UNESCO World Heritage Sites and draw millions of tourists each year. The country's natural beauty is equally captivating, with destinations like the Himalayas, Kerala's backwaters, and Goa's beaches offering unique experiences for travelers. India's rich cultural tapestry is evident in its festivals, cuisine, and traditional arts, which vary from region to region. The hospitality and warmth of the Indian people are also renowned, making visitors feel welcome and at home. However, challenges such as infrastructure development, cleanliness, and safety remain areas of focus for the tourism industry in India. Despite these challenges, India continues to be a popular destination for travelers seeking a blend of history, culture, and natural beauty.",
    "Sustainable development is a holistic approach to economic, social, and environmental progress that seeks to meet the needs of the present without compromising the ability of future generations to meet their own needs. It emphasizes the interconnectedness of economic prosperity, social equity, and environmental sustainability. Sustainable development recognizes that human well-being depends on healthy ecosystems and a stable climate, and it seeks to promote responsible stewardship of natural resources. This approach requires collaboration between governments, businesses, civil society, and individuals to create a more sustainable and equitable world. Key principles of sustainable development include reducing poverty, promoting education and healthcare, ensuring access to clean water and sanitation, and fostering sustainable economic growth. By addressing these issues in an integrated manner, sustainable development aims to improve the quality of life for all while safeguarding the planet for future generations. Achieving sustainable development requires transformative change in policies, practices, and attitudes at local, national, and global levels. It involves adopting sustainable consumption and production patterns, investing in renewable energy sources, and promoting sustainable agriculture and fisheries. Sustainable development is essential for addressing pressing global challenges such as climate change, biodiversity loss, and social inequality. It offers a path to a more prosperous, inclusive, and resilient future for all.",
    "India's history is vast and diverse, spanning thousands of years and encompassing many civilizations, cultures, and dynasties. Ancient India was home to the Indus Valley Civilization, one of the world's oldest urban civilizations. Over the centuries, India saw the rise and fall of many empires, including the Maurya, Gupta, and Mughal empires, each leaving a lasting impact on the country's culture, art, and architecture. India has been a land of great spiritual and philosophical thought, giving birth to religions such as Hinduism, Buddhism, Jainism, and Sikhism. The country has also been a center of learning and scholarship, with institutions like Nalanda and Takshashila attracting students from all over the world. India's history is marked by periods of prosperity and innovation, as well as times of conflict and foreign invasions. The country's rich heritage is reflected in its languages, literature, music, and dance forms, which have evolved over millennia. In 1947, India gained independence from British rule, marking the beginning of a new chapter in its history as a sovereign nation. Since then, India has made significant strides in various fields, becoming one of the world's largest economies and a vibrant democracy."
];


$random_text = $random_texts[array_rand($random_texts)];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="icon" href="image/logo.webp">
    <link rel="stylesheet" href="main.php"/>
    <title>speedyfingers - Learn & Practice Online</title>
</head>
<body>
    <!-- Image and text -->
<nav class="navbar navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="image/logo.webp" alt="" width="30" height="24" class="d-inline-block align-center">
      Speedy Fingers
    </a>
  </div>
</nav>

<div class="modal" id="modalui2" tabindex="-1" style="display:none;background-color:rgba(0,0,0,0.8)">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Typing Test Result</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
     <h1 id="wname"></h1>
     <h3 id="acc" class="badge bg-danger"></h3>
     <h3 id="wpm" class="badge bg-warning"></h3>
      </div>
      <div class="modal-footer">
       
        <a href="typingtest.php" class="btn btn-primary">Take Test Again</a>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="modalui" tabindex="-1" style="display:block;background-color:rgba(0,0,0,0.8)">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Take Typing Test</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <select name="time" id="time" class="form-select" aria-label="Default select example">
  <option selected disabled>Time Duration</option>
  <option value="60">1 Minute</option>
  <option value="300">5 Minute</option>
  <option value="600">10 Minute</option>
</select>
<div class="input-group mt-3">
  <input type="text" name="name" id="name" class="form-control" placeholder="Enter Your Name..">
</div>
      </div>
      <div class="modal-footer">
       
        <button type="button" id="stbutton" class="btn btn-primary">Start Test</button>
      </div>
    </div>
  </div>
</div>

<div class="container">
<div class="card mt-4">
  <h5 class="card-header">Take Typing Test

  <div class="progress mt-3">
  <div class="progress-bar-animated progress-bar-striped bg-danger" role="progressbar" id="timebar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</div>

</h5>
  <div class="card-body col-12 row">
  
<div class="lessonwords ms text-start">
<?php echo $random_text; ?>
</div>   

  </div>
</div>

<div class="card mt-4 keycover">
  <div class="card-body col-12 row">
  <div class="input-group">
  <textarea id="typingtool" class="form-control" rows="8" aria-label="With textarea"></textarea>
</div>
  </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="js/typingtest.js"></script>
</body>
</html>
