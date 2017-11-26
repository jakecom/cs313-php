// require and instantiate express
//var app = require('express')();
var express = require('express');
var app = express();

var port = process.env.PORT || 8080;

// fake posts to simulate a database
const posts = [
  {
    id: 1,
    author: 'Bishop Jensen',
    title: 'Ward Christmas Party',
    date: '12/9/17',
    time: '6:00 pm',
    body: 'It is that time of year for the ward Christmas party. Bring your friends, family, and an entree/side/dessert for the potluck'
  },
  {
    id: 2,
    author: 'President Burton',
    title: 'Indexing Party',
    date: '11/9/17',
    time: '6:30 pm',
    body: 'We will be having an indexing night at the Nielson home. Bring your laptop. Pizza will be provided, and the Seahawks will be on.'
  },
  {
    id: 3,
    author: 'President Burton',
    title: '5k Run',
    date: '4/29/17',
    time: '8:00 am',
    body: 'Come on down to the Park for the 5k run.'
  }
]

// set the view engine to ejs
app.set('view engine', 'ejs')

app.use(express.static(__dirname + '/partials'));

// blog home page
app.get('/', (req, res) => {
  // render `home.ejs` with the list of posts
  res.render('home', { posts: posts })
})

// blog post
app.get('/post/:id', (req, res) => {
  // find the post in the `posts` array
  const post = posts.filter((post) => {
    return post.id == req.params.id
  })[0]

  // render the `post.ejs` template with the post content
  res.render('post', {
    author: post.author,
    title: post.title,
    date: post.date,
    time: post.time,
    body: post.body
  })
})

//app.listen(8080)

//console.log('listening on port 8080')
app.listen(port, function() {
    console.log('Our app is running on http://localhost:' + port);
});
