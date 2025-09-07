# 📌 Visual Bookmarking Platform
A full-stack image sharing web application that allows users to register, log in, upload images, and explore an infinite scrolling feed of content. Built with modern web technologies, this project replicates the core features of Pinterest and is designed to be scalable and user-friendly.

## 🚀 Features

- 🔐 **User Authentication** – Sign up, log in, and manage user sessions
- 📤 **Image Upload** – Upload, preview, and store images securely
- 🖼️ **Gallery View** – Masonry-style, responsive image grid
- ♾️ **Infinite Scrolling** – Seamless content loading as users scroll
- 🧑 **User Profiles** – View images uploaded by individual users
- 📱 **Responsive Design** – Fully optimized for mobile and desktop
- 🗃️ **Backend Integration** – API-driven architecture with database support

## 🛠️ Tech Stack

**Frontend:**
- HTML5, CSS3, JavaScript
- Responsive design using Flexbox & CSS Grid

**Backend:**
- Node.js / Express (or your stack)
- MongoDB / MySQL (depending on what you used)
- RESTful APIs

**Other Tools:**
- Multer (for image upload handling)
- JWT or Sessions (for authentication)
- Git & GitHub for version control

## 📁 Project Structure

pinterest-clone/                                               <br>
├── client/ # Frontend code                                    <br>
│ ├── index.html                                               <br>
│ ├── style.css                                                <br>
│ └── script.js                                                <br>
│                                                              <br>
├── server/ # Backend code                                     <br>
│ ├── app.js / server.js                                       <br>
│ ├── routes/                                                  <br>
│ ├── controllers/                                             <br> 
│ └── models/                                                  <br>
│                                                              <br>
├── uploads/ # Uploaded image storage (if stored locally)      <br>
├── .env # Environment variables                               <br>
└── README.md # Project documentation                          <br>


## 📸 Screenshots

- **Database:** https://github.com/user-attachments/assets/e3d89d1b-a64e-4efa-8d72-6bec6422b808
- **Main Tab:** https://github.com/user-attachments/assets/d0ffe090-4f66-4228-8ee2-36995080691b
- **Signup Page:** https://github.com/user-attachments/assets/3a145b5c-83fa-4881-9d5d-88ba6d12ea54
- **Login Page:** https://github.com/user-attachments/assets/4b90d904-39cf-4b8e-8027-92b21ec8f45e
- **Explore Tab:** https://github.com/user-attachments/assets/b35812c8-350f-41be-bf24-984e3edc1e3a
- **Search Feature:** https://github.com/user-attachments/assets/68750067-e379-400f-9e68-1108e07b4fd8





## 📦 Setup Instructions

1. **Clone the repository**:
   ```bash
   git clone https://github.com/yourusername/pinterest-clone.git
   cd pinterest-clone

2. Set up the backend:
   ```bash                           
   cd server                                        
   npm install                               
   touch .env  # Create your environment config     
   npm start                                        

   
3. Environment Variables (.env) Example:
   ```bash        
   PORT=5000                                       
   MONGO_URI=your_mongodb_connection_string         
   JWT_SECRET=your_secret_key                      

## 🙋‍♂️ Author
Developed with ❤️ by Puneet Kumart <br>
Feel free to connect, give feedback, or contribute to this project.
