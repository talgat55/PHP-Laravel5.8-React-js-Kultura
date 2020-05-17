/*
*  Get related 8 news
*/
export async function fetchRelatedNews(){
    const response = await fetch('/api/get-news-last');
    const json = await response.json();
    return json;
}
/*
* Get news  with pages
*/
export async function fetchNewsWithPage(page = 1){
    const response = await fetch(`/api/get-news/${page}`);
    const json = await response.json();
    return json;
}

/*
* Get detail news
*/
export async function fetchDetailNews(slug){
    const response = await fetch(`/api/get-news-detail/${slug}`);
    const json = await response.json();
    return json;
}

