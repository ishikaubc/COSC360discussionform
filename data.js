var defaultThreads = [
    {
        id: 1,
        title: "Thread 1",
        author: "Charvie",
        date: Date.now(),
        content: "Thread content",
        comments: [
            {
                author: "Ishika",
                date: Date.now(),
                content: "How's it going!"
            },
            {
                author: "John",
                date: Date.now(),
                content: "Pretty good. I was checking out the UBC page to find any help on signing up for events actually."
            }
        ]
    },
    {
        id: 2,
        title: "Thread 2",
        author: "Charvie",
        date: Date.now(),
        content: "Thread content 2",
        comments: [
            {
                author: "John",
                date: Date.now(),
                content: "Hey there"
            },
            {
                author: "Ishika",
                date: Date.now(),
                content: "Hey to you too"
            }
        ]
    }
]

var threads = defaultThreads
if (localStorage && localStorage.getItem('threads')) {
    threads = JSON.parse(localStorage.getItem('threads'));
} else {
    threads = defaultThreads;
    localStorage.setItem('threads', JSON.stringify(defaultThreads));
}