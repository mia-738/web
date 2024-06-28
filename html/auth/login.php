{% extends "template.html" %}


{% block title %}
Login
{% endblock  %}


{% block files %}

{% endblock  %}
    

{% block content %}
<h2>Login</h2>
    <form action="{{url_for('login_request.login_request')}}" method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
{% endblock  %}
