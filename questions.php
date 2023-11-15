<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="css/nav_questions.css" rel="stylesheet" />

  <!-- Bootstrap CSS CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" />

  <!-- jQuery CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <title>Questions & Answers</title>

  <!-- Your CSS and JS links here (e.g., Bootstrap, your custom CSS file, etc.) -->

  <!-- For the purpose of this demo, we are using Bootstrap for the layout -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
</head>

<body>
  <!-- Header (unchanged) -->
  <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="css/images/logo.jpg" alt="" width="200rem" class="d-inline-block align-text-top" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aboutus.php">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Content for Questions and Answers -->
  <div class="container mt-4">
    <div class="col-full">
      <h1>Ask Your Question</h1>
      <div class="form-group">
        <label for="question">Your Question:</label>
        <input type="text" class="form-control" id="question" placeholder="Enter your question here" />
      </div>
      <button class="btn btn-primary mt-2" id="askButton">
        Ask Question
      </button>
    </div>
    <div class="col-full mt-4" id="answerContainer">
      <!-- Answers will be displayed here -->
    </div>
  </div>

  <!-- JavaScript code for pre-defined questions and answers -->
  <script>
    const predefinedQuestions = {
      "What are the latest fashion trends?":
        "The latest fashion trends are constantly changing. Visit our website to discover the current trends.",
      "How can I choose the right size?":
        "We provide a size chart on our website that will help you in selecting the right size. You can also contact our customer service for further assistance.",
      "Are there shipping costs?":
        "Shipping costs may vary depending on your location and the shipping method. Please check our shipping policies on our website for more information.",
      "How can I return an item?":
        "Please visit our return policies on our website to get information on returning items.",
      "Are there current sale offers or discounts?":
        "Yes, we regularly offer sale promotions and discounts. Check our website and subscribe to our newsletter to stay informed about our current offers.",
      "Where can I find customer reviews?":
        "Customer reviews can be found on the product pages under 'Reviews' or in our 'Customer Feedback' section on our website.",
      "Which payment methods do you accept?":
        "We accept various payment methods including credit cards, PayPal, and more. The available payment methods will be displayed during the checkout process.",
      "Can I track my order?":
        "Yes, you can track your order on our website. After shipment, you will receive a tracking number via email.",
      "How can I contact customer service?":
        "You can reach our customer service through the contact information on our website. We are happy to assist you with any questions or concerns.",
      // Add more questions and answers as needed.
      // Add additional predefined questions and answers here
    };

    const questionInput = document.getElementById("question");
    const askButton = document.getElementById("askButton");
    const answerContainer = document.getElementById("answerContainer");

    askButton.addEventListener("click", () => {
      const userQuestion = questionInput.value;

      if (predefinedQuestions.hasOwnProperty(userQuestion)) {
        const answer = predefinedQuestions[userQuestion];
        const answerElement = document.createElement("p");
        answerElement.textContent = `Question: ${userQuestion}\nAnswer: ${answer}`;
        answerContainer.appendChild(answerElement);
        questionInput.value = "";
      } else {
        alert("Sorry, I don't know the answer to that question.");
      }
    });
  </script>

  <!-- Your JavaScript links here (e.g., Bootstrap, jQuery, etc.) -->
  <!-- Bootstrap JS and Popper.js CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>