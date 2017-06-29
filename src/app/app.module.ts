import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import {BrowserAnimationsModule} from '@angular/platform-browser/animations';
import { MaterialModule, MdIconModule, MdNativeDateModule } from '@angular/material';
import { FlexLayoutModule } from '@angular/flex-layout';
import 'hammerjs';

import { AppComponent } from './app.component';
import { AccueilComponent } from './apps/accueil/accueil.component';
import { ContactFauneComponent } from './apps/contact-faune/contact-faune.component';
import { ContactFloreComponent } from './apps/contact-flore/contact-flore.component';

@NgModule({
  declarations: [
    AppComponent,
    AccueilComponent,
    ContactFauneComponent,
    ContactFloreComponent
  ],
  imports: [
    BrowserModule,
    BrowserAnimationsModule,
    MaterialModule,
    FlexLayoutModule,
    MdIconModule,
    MdNativeDateModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
