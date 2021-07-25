# Running Website (homepage) Locally

How to run locally?
1. Install XAMPP.
2. Download and Extract file into "./xampp/htdocs"
3. Turn mysql and apache server on.
4. Type "http://localhost".
5. Go to phpMyAdmin.
6. Create a database name "user_registration".
7. Import the mysql file in "./provid/user_registration database/user_registration."
8. Go to browser and type "http://localhost/provid/Login.php".




# COVID-19 Tracker


## Introduction

API used: https://covid19.mathdro.id/api

Setup:
- run ```npm i && npm start```





# News App - React

Application to view news stories from sources around the world.

Built with [React](https://reactjs.org/) as frontend JavaScript framework.



### Install dependencies

Install `npm` dependencies with Yarn:

```
yarn
```

### Get API key for News service

Head to [http://newsapi.org](http://newsapi.org), signup or login to and get an API key


### Add details in `.env.local` file

Create `.env.local` file from example `.env` file and maintain necessary details in it e.g. API key etc

```sh
cp .env .env.local
```




# Covid-19 Detection Website Application

## Installation Instructions

- Download or decrement to Python (below 3.7 version and 64-bit version) for TensorFlow
```
I used 3.6.8, 64-bit Python
https://www.python.org/downloads/release/python-368/
```

- Create & activate virtual environment 
```
python -m venv covidEnv
virtualenv covidEnv
covidEnv\Scripts\activate
```
- Install Dependencies & Packages
```
pip install flask, boto3, keras, tensorflow, Pillow
```

## Running the code 
- Activate Virtual Environment
```
covidEnv\Scripts\activate
```
- In the "flask-backend" directory:
```
python app.py
```
- Open another terminal and In the "react-frontend" directory:
```
npm install
npm start
```
