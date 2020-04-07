import React, {useState,useEffect} from 'react';
import Header from "../elements/Header/Header";
import Footer from "../elements/Footer/Footer";
import {fetchHomeSliders} from "../../../api/getHomeSliders";
import HomeSlider from "../elements/HomeSlider/HomeSlider";
const Home = () => {
    const [homeSliders , setHomeSliders] = useState([]);
    useEffect(   () => {
        const fetchData = async () => {
            const data = await fetchHomeSliders();
            setHomeSliders(data);
        };
        fetchData();

        return () => {
            setHomeSliders([]);
        }
    },[setHomeSliders]);
    return (
        <>
            <Header/>
            <HomeSlider
                sliders={homeSliders}
            />

            <Footer/>
        </>
    )
};

export default  Home;