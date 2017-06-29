import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-sidenav-items',
  templateUrl: './sidenav-items.component.html',
  styleUrls: ['./sidenav-items.component.scss']
})
export class SidenavItemsComponent implements OnInit {

  private geonature_image;
  private nav = [{}];
  constructor() {
    this.nav = [{route: '/accueil', appName: 'Accueil', icon: 'home'},
                {route: '/synthese', appName: 'Synthèse', icon: 'assessment'},
                {route: '/contact-faune', appName: 'Contact Faune', icon: 'pets'},
                {route: '/contact-flore', appName: 'Contact Flore', icon: 'filter_vintage'},
                {route: '/flore-station', appName: 'Flore Station', icon: 'local_florist'},
                {route: '/suivi-flore', appName: 'Suivi Flore', icon: 'visibility'},
                {route: '/parametres', appName: 'Paramètres', icon: 'settings'},
                {route: '/suivi-chiro', appName: 'Suivi Chiro', icon: 'youtube_searched_for'},
                {route: '/exports', appName: 'Exports', icon: 'cloud_download'},
                {route: '/prospections', appName: 'Prospections', icon: 'feedback'}
                ]
  }

  ngOnInit() {
      this.geonature_image = './../../../images/geonature_image3.png';
  }

}
