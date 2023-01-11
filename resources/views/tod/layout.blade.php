<!DOCTYPE html>
<html>
<head>
  <title>Truth or Dare App</title>
  <link rel="stylesheet" >
  @livewireStyles()
  <style>
    body {
    font-family: sans-serif;
    background-color: #f5f5f5;
  }
  
  .container {
    max-width: 600px;
    margin: 0 auto;
    text-align: center;
    padding: 20px;
  }
  
  h1 {
    font-size: 2em;
    margin-bottom: 10px;
  }
  
  input[type="text"] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
  }
  
  button {
    background-color: #4caf50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  button:hover {
    background-color: #45a049;
  }
  
  #create-room-link {
    color: #00b8d4;
    text-decoration: none;
  }
  
  #create-room-link:hover {
    color: #00a5c6;
  }

  </style>
</head>
<body>
  @yield('content')



@livewireScripts()
</body>
</html>