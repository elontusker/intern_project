// Replace with your Dialogflow API credentials
const DIALOGFLOW_PROJECT_ID = 'your-project-id';
const DIALOGFLOW_LANGUAGE_CODE = 'en';

// Elements
const chatMessages = document.getElementById('chat-messages');
const userInput = document.getElementById('user-input');
const sendButton = document.getElementById('send-btn');

// Event listener for send button
sendButton.addEventListener('click', () => {
    const userMessage = userInput.value;
    displayMessage(userMessage, 'user');
    userInput.value = '';
    
    // Call Dialogflow API
    callDialogflowAPI(userMessage);
});

// Display a message in the chat
function displayMessage(message, sender) {
    const messageDiv = document.createElement('div');
    messageDiv.className = `message ${sender}`;
    messageDiv.textContent = message;
    chatMessages.appendChild(messageDiv);
}

// Call Dialogflow API
function callDialogflowAPI(message) {
    // Make an API request to Dialogflow using your preferred method (e.g., Fetch or Axios)
    // Handle the response and extract the chatbot's reply
    
    // For demonstration purposes, let's assume the chatbot replies immediately
    const chatbotReply = "Hello! How can we help you today?";
    
    // Display chatbot's reply
    displayMessage(chatbotReply, 'chatbot');
}
