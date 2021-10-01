from flask import Flask, render_template

app = Flask(__name__)

@app.route("/", methods=['POST','GET'])
def main_home():
	return render_template("home.html")

@app.route("/home", methods=['POST','GET'])
def home():
	return render_template("home.html")

@app.route("/contribute", methods=['POST','GET'])
def contribute():
	return render_template("contribute.html")

@app.route("/login", methods=['POST','GET'])
def login():
	return render_template("login-user.php")

@app.route("/signup", methods=['POST','GET'])
def register():
	return render_template("signup-user.php")


@app.route("/contactus", methods=['POST','GET'])
def contactus():
	return render_template("contactus.html")



@app.route("/ourteam", methods=['POST','GET'])
def ourteam():
	return render_template("ourteam.html")

@app.route('/signup-user', methods=['POST','GET'])
def smethingig():
	return render_template('home.html')

@app.route("/about", methods=['POST','GET'])
def about():
	return render_template("about.html")



if __name__ == "__main__":
	app.run(debug=True, host='0.0.0.0',port=8080)