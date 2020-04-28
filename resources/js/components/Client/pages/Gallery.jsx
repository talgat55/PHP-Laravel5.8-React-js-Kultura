import React, {useEffect, useState} from 'react';
import {fetchGalleryPage} from "../../../api/getGallery";
import GalleryPage from "../elements/GalleryPage";
const Gallery = () => {
    const [gallery, setGallery] = useState(null);
    const [page, setPage] = useState(1);
    useEffect(() => {
        const fetchData = async () => {
            const dataNews = await fetchGalleryPage(page);
            setGallery(dataNews);
        };
        fetchData();
        return () => {
            setGallery(null);
        }
    }, []);

    return (
        <>
            {gallery && (<GalleryPage
                data={gallery}
            />)
            }
        </>
    )
};


export default Gallery;