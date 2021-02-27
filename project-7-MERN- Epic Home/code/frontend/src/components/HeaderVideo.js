import React, { Component } from 'react'
import './Homeheader.css'
import ImageCard from "./ImageCard";


export default class HomeVideo extends Component {
    render() {
        return (
            <>
            <div id="videowrapper" style={{maxWidth: 100}}>
                <div id="fullScreenDiv">
                    <video id="video" role="presentation" preload="auto" playsInline="" crossOrigin="anonymous" autoPlay loop muted className="blur">
                        <source src={'https://res.cloudinary.com/hnifjndzw/video/upload/v1614422138/EPIC-HOME_Made_with_FlexClip_omft4k.mp4'} type="video/mp4" />
                    </video>
                    <div id="videoMessage" className="styling">
                        <h1/>
                        <p className="videoClick"><a href="#products">Check our latest products!</a></p>
                    </div>
                </div>
            </div>
                <ImageCard />
            </>
        )
    }
}
