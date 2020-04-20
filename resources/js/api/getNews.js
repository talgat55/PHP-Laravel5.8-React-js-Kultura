export async function fetchRelatedNews(){
    const response = await fetch('/api/get-news-last');
    const json = await response.json();
    return json;
}