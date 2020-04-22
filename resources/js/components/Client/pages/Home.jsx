import React, {useEffect, useState} from 'react';
import {fetchHomeSliders} from "../../../api/getHomeSliders";
import {fetchRelatedAfisha} from "../../../api/getAfisha";
import {fetchRelatedCultureDetails} from "../../../api/getCultureDetails";
import {fetchRelatedNews} from "../../../api/getNews";'NeoSansPro-Bold'
import {fetchBanner} from "../../../api/getBanner";
import HomeSlider from "../elements/HomeSlider/HomeSlider";
import AfishaBlock from "../elements/AfishaBlock/AfishaBlock";
import Banner from "../elements/Banner/Banner";
import CultureDetails from "../elements/CultureDetails/CultureDetails";
import NewsBlock from "../elements/NewsBlock";

const Home = () => {
    const [homeSliders, setHomeSliders] = useState([]);
    const [cultureDetails, setCultureDetails] = useState(null);
    const [afishaSlides, setAfishaSlides] = useState([]);
    const [banner, setBanner] = useState(null);
    const [relatedNews, setRelatedNews] = useState(null);
    useEffect(() => {
        const fetchData = async () => {
            // get from api   home slider slides
            const dataHomeSlides = await fetchHomeSliders();
            setHomeSliders(dataHomeSlides);
            // get from api related afisha slides
            const dataAfisahSlides = await fetchRelatedAfisha();
            setAfishaSlides(dataAfisahSlides);

            const dataBanner = await fetchBanner('home_one');
            setBanner(dataBanner[0]);
            const dataCultureDetails = await fetchRelatedCultureDetails();
            setCultureDetails(dataCultureDetails);

            const dataRelatedNews = await fetchRelatedNews();
            setRelatedNews(dataRelatedNews);




        };
        fetchData();

        return () => {
            setHomeSliders([]);
            setAfishaSlides([]);
            setBanner('');
        }

    }, [setHomeSliders]);

    return (
        <>

            <HomeSlider
                sliders={homeSliders}
            />
            <AfishaBlock
                sliders={afishaSlides}
            />
            {
                banner &&(
                    <Banner
                        link={banner.link}
                        url={banner.image}
                    />
                )
            }

            {
                cultureDetails &&(
                    <CultureDetails
                        data={cultureDetails}
                    />
                )
            }

            {
                relatedNews &&(
                    <NewsBlock
                        data={relatedNews}
                    />
                )
            }

        </>
    )
};

export default Home;