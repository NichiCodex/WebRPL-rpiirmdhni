const articleSearchInput = document.getElementById('article-search');
const articleDropdown = document.getElementById('article-dropdown');
const searchForm = document.getElementById('search-form');

const articles = [{
		title: '1st Place in Web Design Competition at the University of Muhammadiyah Tangerang (UMT)',
		url: '../news/news-31efq2.php',
		image: '../assets/img/post-prestasi-1.jfif'
	},
	{
		title: '1st place in the Student Competency Competition (LKS) in the SMK Level Web Design section',
		url: '../news/news-612ytp.php',
		image: '../assets/img/post-prestasi-3.jpeg'
	},
	{
		title: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, fugiat magnam',
		url: '../news/news-91fra0.php',
		image: '../assets/img/foto-lapangan.jpg'
	}
];

function updateDropdown(searchQuery) {
	const isMobile = window.innerWidth <= 768;

	const filteredArticles = articles.filter(article => article.title.toLowerCase().includes(searchQuery));

	articleDropdown.innerHTML = '';
	if (searchQuery.trim() === '' || !articleSearchInput.matches(':focus')) {
		articleDropdown.style.display = 'none';
	} else if (filteredArticles.length === 0) {
		articleDropdown.innerHTML = '<div class="dropdown-item text-center"><small>Not Found!</small></div>';
		articleDropdown.style.display = 'block';
	} else {
		filteredArticles.forEach(article => {
			const articleLink = document.createElement('a');
			articleLink.classList.add('dropdown-item', 'd-flex', 'align-items-center');
			articleLink.href = `news/${encodeURIComponent(article.url)}`;

			const thumbnailImage = document.createElement('img');
			thumbnailImage.src = article.image;
			thumbnailImage.alt = 'News of RPL';
			thumbnailImage.width = 40;
			thumbnailImage.height = 40;
			thumbnailImage.classList.add('me-2', 'thumbnail-image', 'nichipost', 'rounded');
			articleLink.appendChild(thumbnailImage);

			const titleSpan = document.createElement('span');
			const maxTitleLength = isMobile ? 30 : 20;
			titleSpan.textContent = truncateText(article.title, maxTitleLength);
			articleLink.appendChild(titleSpan);

			articleDropdown.appendChild(articleLink);
		});
		articleDropdown.style.width = `${articleSearchInput.clientWidth}px`;
		articleDropdown.style.display = 'block';
	}
}

function truncateText(text, maxLength) {
	if (text.length > maxLength) {
		return text.slice(0, maxLength - 3) + '...';
	} else {
		return text;
	}
}

articleSearchInput.addEventListener('input', () => {
	const searchQuery = articleSearchInput.value.toLowerCase();
	updateDropdown(searchQuery);
});

articleSearchInput.addEventListener('blur', () => {
	setTimeout(() => {
		updateDropdown('');
	}, 200);
});

searchForm.addEventListener('button', event => {
	event.preventDefault();
	const selectedArticle = articleDropdown.querySelector('.active');
	if (selectedArticle) {
		window.location.href = selectedArticle.href;
	}
});