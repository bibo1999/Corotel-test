<style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);
// Variables
$regal-blue: #034378;
$san-juan: #2d4e68;
$bermuda: #77d7b9;
$white: #fff;
$black: #000;
$open-sans: 'Open Sans',
sans-serif;
// clear-fix mixin
@mixin cf {
  &::before,
  &::after {
    content: '';
    display: table;
  }
  &::after {
    clear: both;
  }
}

* {
  box-sizing: border-box;
}

body {
  background-image: linear-gradient(to right, $regal-blue, $san-juan);
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  height: 100vh;
  font-family: $open-sans;
}

.cardTitle {
  text-decoration: none;
}

.title {
  font-family: $open-sans;
  font-weight: 300;
}

.row {
  max-width: 900px;
  margin: 50px auto 0;
}

// Base styles
.card {
  float: left;
  padding: 0 1.7rem;
  width: 80%;
  .menu-content {
    @include cf;
    margin: 0;
    padding: 0;
    list-style-type: none;
    li {
      display: inline-block;
    }
    a {
      color: $white;
    }
    span {
      position: absolute;
      left: 50%;
      top: 0;
      font-size: 10px;
      font-weight: 700;
      font-family: 'Open Sans';
      transform: translate(-50%, 0);
    }
  }
  .wrapper {
    background-color: $white;
    position: relative;
    overflow: hidden;
    box-shadow: 0 19px 38px rgba($black, 0.3), 0 15px 12px rgba($black, 0.2);
  }
  .data {
	  float: right;
    width: 60%;
	 height: 100%;
    .content {
      padding: 1em;
      position: relative;
      z-index: 1;
    }
  }
  .author {
    font-size: 12px;
  }
  .title {
    margin-top: 10px;
  }
  .text {
    height: 70px;
    margin: 0;
  }
  input[type='checkbox'] {
    display: none;
  }
  input[type='checkbox']:checked + .menu-content {
    transform: translateY(-60px);
  }
}

// First example styles
.example-1 {
  .wrapper {

	 
  }
  .date {
    position: absolute;
    top: 0;
    left: 0;
    background-color: $bermuda;
    color: $white;
    padding: 0.8em;
    span {
      display: block;
      text-align: center;
    }
    .day {
      font-weight: 700;
      font-size: 24px;
      text-shadow: 2px 3px 2px rgba($black, 0.18);
    }
    .month {
      text-transform: uppercase;
    }
    .month,
    .year {
      font-size: 12px;
    }
  }
  .content {
    background-color: $white;
    box-shadow: 0 5px 30px 10px rgba($black, 0.3);
  }
  .title {
    a {
      color: lighten($black, 50%);
    }
  }
}

.image {
	float: left;
	width: 40%;
}

.book-image {
	width: 100%;
	display: block;
	height: 80%;
	margin-top: auto;
	margin-bottom: auto;
}

</style>
<div class="row">
  <div class="example-1 card">
    <div class="wrapper">
      
    
		 
		 <div class="image">
			 <img class="book-image" src="https://bit.ly/2GkldBe"/>
		 </div>
      
      <div class="data">
        <div class="content">
          <span class="author">Jane Doe</span>
          <h1 class="title"><a href="#" class="cardTitle">Boxing icon has the will for a couple more fights</a></h1>
          <p class="text">The highly anticipated world championship fight will take place at 10am and is the second major boxing blockbuster in the nation after 43 years.</p>
        </div>
      </div>
      
    </div>
  </div>
</div>