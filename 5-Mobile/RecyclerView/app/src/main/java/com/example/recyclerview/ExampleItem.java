package com.example.recyclerview;

public class ExampleItem {
    private int mImageResource;
    // int parce que les ressources on des indices numériques
    private String mText1;
    private String mText2;

    public ExampleItem(int mImageResource, String mText1, String mText2){
        this.mImageResource=mImageResource;
        this.mText1=mText1;
        this.mText2=mText2;
    }

    public int getmImageResource() {
        return mImageResource;
    }

    public String getmText1() {
        return mText1;
    }

    public String getmText2() {
        return mText2;
    }
}
