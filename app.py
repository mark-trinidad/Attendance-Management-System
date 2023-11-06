from flask import Flask, render_template

app = Flask(__name__)

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/services')
def assessment():
    return render_template('services.html')

@app.route('/about')
def assessment():
    return render_template('about.html')

@app.route('/courses')
def assessment():
    return render_template('courses.html')

@app.route('/login')
def assessment():
    return render_template('login.html')


if __name__ == '__main__':
    app.run()
